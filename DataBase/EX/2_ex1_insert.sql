INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)

VALUES
(
	500000
	,NOW()
	,'MinJin'
	,'Kang'
	,'F'
	,NOW()
)
-- INSERT INTO 테이블(속성명1, 2, ...)
-- VALUES (속성값1, 2, ...)

UPDATE employees
   SET first_name = 'MinJin'
   WHERE emp_no = 500000;
-- UPDATE 테이블
-- SET 바꾸려는 속성명 = 바꾸려는 속성값
-- WHERE 바꾸려는 열의 위치 = 위치;  
 
SELECT *
FROM employees
WHERE emp_no = 500000;

