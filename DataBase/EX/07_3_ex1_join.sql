-- 0. JOIN이란?
-- 	두개 이상의 테이블을 묶어서 하나의 결과 집합으로 출력하는 것입니다.

-- 1. INNER JOIN(교집합)의 구조
-- 	SELECT 컬럼1, 컬럼2
-- 	FROM 테이블1 INNER JOIN 테이블2
-- 		ON 조인 조건
-- 	[WHERE 검색조건]

SELECT emp.emp_no, demp.dept_no, emp.first_name
FROM employees emp
	INNER JOIN dept_emp demp
		ON emp.emp_no = demp.emp_no
LIMIT 10;

-- 2. OUTER JOIN :
-- 	- 기준이 되는 테이블의 레코드는 조인의 조건에 만족되지 않아도 출력
-- SELECT 컬럼1, 컬럼2 ...
-- FROM 테이블1
-- 	[ LEFT | RIGHT | FULL ] OUTER JOIN 테이블2
-- 		ON 조인 조건
-- WHERE 검색조건;
-- * MariaDB에선 FULL지원X

SELECT dept.dept_no, dept.dept_name, d_m.emp_no, d_m.from_date
FROM departments dept
	LEFT OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;

-- 3. CROSS JOIN : 
-- 	- 테이블1의 모든 레코드와 테이블2의 모든 레코드를 조인
-- 	- 실무에서 사용되는 경우는 거의 없고, 가끔 테스트용 테이터를 생성하기 위해 사용 될 수도 있습니다.
-- SELECT 컬럼1, 컬럼2 ...
-- FROM 테이블1
-- 	CROSS JOIN 테이블2
-- WHERE 검색조건;

-- 4. SELF JOIN : 자기 자신을 조인
-- SELECT 컬럼1, 컬럼2 ...
-- FROM 테이블1
-- 	INNER JOIN 테이블1
-- WHERE 검색조건;

-- 10001의 상사의 정보를 가져온다.
SELECT emp2.*
FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no
WHERE emp1.emp_no = 10001;

-- 이것을 서브쿼리를 사용해서 만들수도 있다.
SELECT *
FROM employees
WHERE emp_no = ( SELECT sup_no
						FROM employees
						WHERE emp_no = 10001);
						
-- 5. UNION / UNION ALL : 
-- 	- 두 쿼리의 결과를 합칩니다.
-- 	- UNION은 중복 값을 제거하고 출력하고, UNION ALL은 중복 값도 출력합니다.
-- SELECT ... FROM ...
-- UNION
-- SELECT ... FROM ...

-- SELECT ... FROM ...
-- UNION ALL
-- SELECT ... FROM ...

SELECT *
FROM employees
WHERE emp_no = 10001 OR emp_no = 10005
UNION ALL
SELECT *
FROM employees
WHERE emp_no = 10005;