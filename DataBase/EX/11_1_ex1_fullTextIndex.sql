-- 1. 전체 텍스트 인덱스(Full Text Index )란?
-- 	긴 문자로 구성된 텍스트 데이터를 빠르게 검색하기 위한 기능
-- 
-- 2. 전체 텍스트 인덱스 생성
-- 	CREATE TABLE 테이블(
-- 		컬럼 데이터타입
-- 		, FULLTEXT 인덱스명(컬럼) 
-- 	)
-- 
-- 	CREATE FULLTEXT INDEX 인덱스명 ON 테이블(컬럼);

CREATE TABLE test_text(
	txt_no INT PRIMARY KEY AUTO_INCREMENT
	,f_txt VARCHAR(4000)
	, FULLTEXT idx_full_test_text_f_txt(f_txt) 
);

CREATE FULLTEXT INDEX 인덱스명 ON 테이블(컬럼);

INSERT INTO test_text(f_txt) VALUES
('비상계엄이 선포된 때에는 법률이 정하는 바에 의하여 영장제도, 언론·출판·집회·결사의 자유, 정부나 법원의 권한에 관하여 특별한 조치를 할 수 있다.');
INSERT INTO test_text(f_txt) VALUES
('모든 국민은 근로의 권리를 가진다. 국가는 사회적·경제적 방법으로 근로자의 고용의 증진과 적정임금의 보장에 노력하여야 하며, 법률이 정하는 바에 의하여 최저임금제를 시행하여야 한다.');
INSERT INTO test_text(f_txt) VALUES
('모든 국민은 언론·출판의 자유와 집회·결사의 자유를 가진다. 통신·방송의 시설기준과 신문의 기능을 보장하기 위하여 필요한 사항은 법률로 정한다.');
INSERT INTO test_text(f_txt) VALUES
('국정의 중요한 사항에 관한 대통령의 자문에 응하기 위하여 국가원로로 구성되는 국가원로자문회의를 둘 수 있다. 국무위원은 국무총리의 제청으로 대통령이 임명한다.');
INSERT INTO test_text(f_txt) VALUES
('국가는 과학기술의 혁신과 정보 및 인력의 개발을 통하여 국민경제의 발전에 노력하여야 한다. 국토와 자원은 국가의 보호를 받으며, 국가는 그 균형있는 개발과 이용을 위하여 필요한 계획을 수립한다.');

COMMIT;


-- 3. 전체 텍스트 인덱스 삭제
-- 	DROP INDEX 인덱스명 ON 테이블명;
-- 
-- 4. 전체 텍스트 조회 방법
-- 	-- 검색어1 또는 검색어2 (or 검색)
-- 	SELECT * FROM Table_Name
-- 	WHERE MATCH(컬럼) AGAINST('검색어1 검색어2');

SELECT * FROM test_text
WHERE MATCH(f_txt) AGAINST('비상계엄 선포');

-- 	-- 검색어 중간에 공백이 들어가는 경우
-- 	SELECT * FROM Table_Name
-- 	WHERE MATCH(컬럼) AGAINST('"검색어 검색어"');
-- 	
-- 	-- 검색어1을 검색한 결과에서 검색어2가 들어간것을 제외 할 때
-- 	SELECT * FROM Table_Name
-- 	WHERE MATCH(컬럼) AGAINST('"검색어1" -검색어2' in boolean mode);
-- 	
-- 	-- 검색어1, 검색어2 함께 검색이 되는 경우 (and 검색) 
-- 	SELECT * FROM Table_Name
-- 	WHERE MATCH(컬럼) AGAINST('+"검색어1" +"검색어2"' in boolean mode);
-- 	
-- 	-- 검색어1과 검색어2 And 검색과 함께 검색어2의 결과도 함께 출력
-- 	SELECT * FROM Table_Name
-- 	WHERE MATCH(컬럼) AGAINST('"검색어1" +"검색어2"' in boolean mode);