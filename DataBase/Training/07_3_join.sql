-- 1. 사원의 사원번호, 풀네임, 직책명을 출력하시오.

SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) fullname, titl.title
FROM employees emp
	INNER JOIN titles titl
		ON emp.emp_no = titl.emp_no
WHERE titl.to_date >= NOW();
	
-- 2. 사원의 사원번호, 성별, 현재 월급을 출력하시오.

SELECT emp.emp_no, emp.gender, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW();
	
-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력하시오.

SELECT CONCAT(emp.last_name, ' ', emp.first_name) fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;

-- 4. 사원의 사원번호, 풀네임, 소속 부서명을 출력하시오.

SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) fullname, dpt.dept_name
FROM employees emp
	INNER JOIN dept_emp dmp
		ON emp.emp_no = dmp.emp_no
	INNER JOIN departments dpt
		ON dmp.dept_no = dpt.dept_no
WHERE dmp.to_date >= NOW()
ORDER BY emp.emp_no;

-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력하시오.

SELECT emp.emp_no, CONCAT(emp.last_name, ' ', emp.first_name) fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW()
ORDER BY sal.salary DESC
LIMIT 10;

-- 6. 각 부서의 부서장의 부서명, 물네임, 입사일을 출력하시오.

SELECT 
	dpt.dept_name
	,CONCAT(emp.last_name, ' ', emp.first_name) fullname
	,emp.hire_date
FROM employees emp
	INNER JOIN dept_manager dpm
		ON emp.emp_no = dpm.emp_no
	INNER JOIN departments dpt
		ON dpm.dept_no = dpt.dept_no
WHERE dpm.to_date >= NOW();


SELECT
	D.dept_no
	,D.dept_name
	,CONCAT(E.last_name, ' ', E.last_name) fullname
	,E.hire_date
FROM employees E
	LEFT OUTER JOIN dept_manager M
 		ON E.emp_no = M.emp_no
	RIGHT OUTER JOIN departments D
		ON M.dept_no = D.dept_no
WHERE M.to_date >= NOW();
		
SELECT
	D.dept_no
	,D.dept_name
	-- ,CONCAT(E.last_name, ' ', E.last_name) fullname
-- 	,E.hire_date
FROM departments D
	LEFT OUTER JOIN dept_manager M
 		ON D.dept_no = M.dept_no;
-- 	RIGHT OUTER JOIN employees E
-- 		ON E.emp_no = M.emp_no
-- WHERE M.to_date >= NOW();		

	



-- 7. 현재 직책이 'Staff'인 사원의 현재 평균 월급을 출력하시오.

SELECT titl.title, AVG(sal.salary)
FROM salaries sal
	INNER JOIN titles titl
		ON sal.emp_no = titl.emp_no
WHERE titl.title = 'Staff' AND titl.to_date >= NOW() AND sal.to_date >= NOW();

SELECT T.title, AVG(S.salary) 평균월급
FROM salaries S
	INNER JOIN titles T
		ON S.emp_no = T.emp_no
WHERE T.title = 'Staff' AND T.to_date >= NOW() AND S.to_date >= NOW();


-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호 출력하시오.

SELECT CONCAT(emp.last_name, ' ', emp.first_name) fullname , emp.hire_date, emp.emp_no, dpm.dept_no
FROM employees emp
	INNER JOIN dept_manager dpm
		ON emp.emp_no = dpm.emp_no
WHERE dpm.to_date != DATE(99990101);
		
SELECT
	CONCAT(E.last_name, ' ', E.first_name) fullname
	,E.hire_date
	,E.emp_no
	,M.dept_no
FROM dept_manager M
	INNER JOIN employees E
		ON M.emp_no = E.emp_no;

-- 9. 현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수) 를 내림차순으로 출력하시오.

-- TRUNCATE는 숫자 형식 그대로.
SELECT titl.title, FLOOR(AVG(sal.salary)) avsal
FROM salaries sal
	INNER JOIN titles titl
		ON sal.emp_no = titl.emp_no
WHERE	sal.to_date >= NOW()
		AND titl.to_date >= NOW()
GROUP BY titl.title
HAVING avsal >= 60000
ORDER BY avsal DESC;

-- FORMAT은 숫자가 문자열로 변환.
SELECT titl.title, FLOOR(AVG(sal.salary))
FROM salaries sal
	INNER JOIN titles titl
		ON sal.emp_no = titl.emp_no
WHERE sal.to_date >= NOW() AND titl.to_date >= NOW()
GROUP BY titl.title
HAVING AVG(sal.salary) >= 60000
ORDER BY AVG(sal.salary) DESC;

-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력하시오.

SELECT titl.title, COUNT(*)
FROM employees emp
	INNER JOIN titles titl
		ON emp.emp_no = titl.emp_no
WHERE emp.gender = 'F'
	AND titl.to_date >= NOW()
GROUP BY titl.title;

-- 11. 직급별 퇴사한 여자사원수?
SELECT titl.title, emp.gender, COUNT(titl.title)
FROM employees emp
	INNER JOIN titles titl
		ON emp.emp_no = titl.emp_no
WHERE emp.gender = 'M'
GROUP BY titl.title;


SELECT titl.title, emp.gender, COUNT(titl.title)
FROM employees emp
	INNER JOIN titles titl
		ON emp.emp_no = titl.emp_no
WHERE emp.gender = 'M' AND titl.to_date != DATE(99990101)
GROUP BY titl.title;

select
	COUNT(emp_no)
from(
	select
		*
	from titles
	where (emp_no, from_date) in (
		select emp_no, max(from_date) as from_date
		from titles group by emp_no
	)
	order by from_date desc
) t
WHERE to_date != DATE(99990101)
;

SELECT title, COUNT(title)
FROM(
	SELECT
		employees emp
		INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
		where (ti.emp_no, ti.from_date) in (
		SELECT emp_no, MAX(from_date)  from_date
		from titles group by emp_no
	)
	order by from_date desc
) t
WHERE to_date != DATE(99990101)
group by t.title;




SELECT A.gender, COUNT(A.gender)
FROM employees A
INNER JOIN
(
	SELECT A.emp_no
	FROM (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING COUNT(emp_no) > 1
	) A
	WHERE A.emp_no NOT IN (
		SELECT A.emp_no FROM titles A
		INNER JOIN (
			SELECT emp_no
			FROM titles
			GROUP BY emp_no
			HAVING COUNT(emp_no) > 1
		) B
		ON A.emp_no = B.emp_no
		WHERE to_date = DATE(99990101)
	)
	
	UNION
	
	SELECT A.emp_no
	FROM titles A
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING COUNT(emp_no) = 1
	) B
	ON A.emp_no = B.emp_no
	WHERE A.to_date != DATE(99990101)
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender
;

select
	A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN(
	SELECT distinct emp_no
	from titles
	WHERE to_date < NOW()
	AND (emp_no, to_date) IN
	(
		select emp_no, max(to_date)
		from titles 
		group by emp_no
	)	
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;


SELECT A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN (
	SELECT DISTINCT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE(99990101)
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender


SELECT A.gender, COUNT(A.gender)
FROM employees A
INNER JOIN (
	SELECT DISTINCT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE(99990101)
) B
ON A.emp_no = B.emp_no
INNER JOIN titles C
ON B.emp_no = C.emp_no
GROUP BY A.gender;

SELECT title, COUNT(title)
FROM (
WHERE
GROUP BY 








