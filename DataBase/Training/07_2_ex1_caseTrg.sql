-- 직책이 'Senior Engineer' 일 경우는 '관리자'
--그 외의 직책은 '팀원' 으로 사번과 분기결과 출력하시오.

SELECT
	emp_no
	,title
	,CASE title
		WHEN 'Senior Engineer' THEN '관리자'
		ELSE '팀원'
	END AS 'K_title'
FROM titles;