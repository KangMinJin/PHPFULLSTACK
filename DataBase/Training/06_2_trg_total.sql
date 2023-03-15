-- 1. 사원 정보에 각각 각자의 정보를 적절하게 넣으시오.
-- 2. 월급, 직팩, 소속부서 테이블에 각자의 정보를 적절히 넣으시오.
-- 3. 짝궁것도 같이 넣는다.
INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)

VALUES (
	500000
	,DATE(19941212)
	,'MinJin'
	,'Kang'
	,'F'
	,DATE(99990101)
)
,(
	500001
	,DATE(19970811)
	,'YuJin'
	,'Shin'
	,'F'
	,DATE(99990101)
)
,(
	500002
	,DATE(19980712)
	,'GaWon'
	,'LEE'
	,'F'
	,DATE(99990101)
);

SELECT *
FROM employees
WHERE emp_no >= 500000;

INSERT INTO salaries(
	emp_no
	,salary
	,from_date
	,to_date
)

VALUES (
	500000
	,5000000
	,DATE(20201212)
	,DATE(99990101)
)
,(	500001
	,3000000
	,DATE(20230316)
	,DATE(99990101)
)
,( 500002
	,77777
	,DATE(20230228)
	,DATE(99990101)
);

INSERT INTO titles(
	emp_no
	,title
	,from_date
	,to_date
)

VALUES (
	500000
	,'Staff'
	,DATE(20201212)
	,DATE(99990101)
)
,(	500001
	,'Assistant Engineer'
	,DATE(20181130)
	,DATE(99990101)
)
,(	500002
	,'Junior Developer'
	,DATE(20230228)
	,DATE(99990101)
);

INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)

VALUES (
	500000
	,'d007'
	,DATE(20201212)
	,DATE(99990101)
)
,(	500001
	,'d001'
	,DATE(20181130)
	,DATE(99990101)
)
,(	500002
	,'d005'
	,DATE(20230228)
	,DATE(99990101)
);

-- 4. 나와 짝궁의 소속 부서를 d009로 변경. (변경 이력 남아야함)
UPDATE dept_emp
SET to_date = NOW()
WHERE emp_no = 500000;

INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)

VALUES (
	500000
	,'d009'
	,NOW()
	,DATE(99990101)
)
,(	500001
	,'d009'
	,NOW()
	,DATE(99990101)
)
,(	500002
	,'d009'
	,NOW()
	,DATE(99990101)
);

-- 5. 짝궁의 모든 정보 삭제.
DELETE FROM employees
WHERE emp_no = 500001 AND emp_no = 500002;

DELETE FROM salaries
WHERE emp_no = 500001 AND emp_no = 500002;

DELETE FROM titles
WHERE emp_no = 500001 AND emp_no = 500002;

DELETE FROM dept_emp
WHERE emp_no = 500001 AND emp_no = 500002;

--한꺼번에 지우는 법.
-- DELETE FROM employees
-- WHERE emp_no = 500001 AND emp_no = 500002;

-- 6.'d009' 부서의 현재 관리자를 나로 변경.(변경 이력 남아야함)
UPDATE dept_manager
SET to_date = NOW()
WHERE emp_no = 111939;

INSERT INTO dept_manager(
	dept_no
	,emp_no
	,from_date
	,to_date
)

VALUES (
	'd009'
	,500000
	,NOW()
	,DATE(99990101)
);

-- 7.오늘부로 나의 직책을 'Senior Engineer'로 변경.(변경 이력 남아야함)

INSERT INTO titles(
	emp_no
	,title
	,from_date
	,to_date
)

VALUES (
	500000
	,'Senior Engineer'
	,NOW()
	,DATE(99990101)
)

-- 8. 최고 연봉 사원과 최저 연봉 사원의 사번과 이름 출력.
SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no = (
					 SELECT emp_no
					 FROM salaries
					 WHERE salary = (
										  SELECT MAX(salary)
										  FROM salaries
));
					 
SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no = (
					 SELECT emp_no
					 FROM salaries
					 WHERE salary = (
										  SELECT MIN(salary)
										  FROM salaries
));

-- 위의 것을 하나로 줄이면 이렇게 된다.
SELECT emp_no, first_name
FROM employees
WHERE emp_no IN(
	SELECT emp_no
	FROM salaries
	WHERE salary IN (
		(SELECT MAX(salary) FROM salaries)
		,(SELECT MIN(salary) FROM salaries)
	)
);


-- 효율이 좋다. 하지만 중복값인경우에는 테이블을 중복으로 가져오지 않아서 수정 필요.
SELECT emp_no, first_name
FROM employees
WHERE emp_no = 
	( SELECT emp_no FROM salaries ORDER BY salary LIMIT 1)
	OR
	emp_no =
	( SELECT emp_no FROM salaries ORDER BY salary DESC LIMIT 1)
;

-- 9. 전체 사원의 평균 연봉 출력.
SELECT AVG(salary)
FROM salaries;


-- 10. 사번이 499,975인 사원의 지금까지 평균 연봉.
SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;


-- 잘못된게 있으면 롤백하고 다시 적용하면 된다. 커밋만 안 하면 롤백됨.
ROLLBACK;

