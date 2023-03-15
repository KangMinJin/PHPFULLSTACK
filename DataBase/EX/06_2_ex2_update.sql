-- UPDATE 테이블명
-- SET (바꾸려는 속성명(컬럼) = 바꾸려는 속성값)
-- WHERE 조건 (or로 연결하면  조건을 여러개 쓸 수 있다.);  

UPDATE departments
SET dept_name = '1000'
WHERE dept_no = 'd001';
-- **조건을 적지 않으면 모든 레코드가 수정된다!

SELECT *
FROM departments
WHERE dept_name = '1000';
-- 업데이트된 속성값을 핀포인트로 찾는다.

SELECT *
FROM departments
WHERE dept_no = 'd001';
-- WHERE 조건이 맞는것인지 확인하려면 SELECT로 먼저 확인한다.


-- 사원의 성, 이름, 생일을 바꾸시오.
UPDATE employees
SET birth_date = DATE(19941212), first_name = 'MinJin', last_name = 'Kang'
WHERE emp_no = 500000;


SELECT *
FROM employees
WHERE emp_no = 500000;

