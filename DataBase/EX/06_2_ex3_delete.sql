-- DELETE FROM 테이블명
-- WHERE 조건
-- ** 조건을 적지 않을 경우 모든 레코드가 삭제된다. 
-- 실수를 방지하기 위해 WHERE절을 먼저 작성하고 DELETE FROM을 작성하면 좋다.

DELETE FROM departments;

-- COMMIT, ROLLBACK, DELETE 는 사용하고 나면 바로 지워준다.
-- 다시 한 번 실행될 수도 있다!

SELECT *
FROM departments;



DELETE FROM employees
WHERE emp_no = 500000;

--지워졌는지 확인.


SELECT *
FROM employees
WHERE emp_no = 500000;


