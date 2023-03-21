-- employees 테이블과 dept_emp를 join해서 사번이 10001인 사원의 사번, 이름, 소속부서번호를 출력하시오.

SELECT A.emp_no, CONCAT(A.first_name,' ', A.last_name) Fullname, B.dept_no
FROM employees A
	INNER JOIN dept_emp B
		ON A.emp_no = B.emp_no
WHERE A.emp_no = 10001;

-- employees, dept_emp, departments를 join해서 사번이 10001인 사원의 사번, 이름, 소속부서번호, 부서명을 출력하시오.

SELECT A.emp_no, CONCAT(A.first_name,' ', A.last_name) Fullname, B.dept_no, C.dept_name
FROM employees A
	INNER JOIN dept_emp B
		ON A.emp_no = B.emp_no
	INNER JOIN departments C
		ON B.dept_no = C.dept_no
WHERE A.emp_no = 10001;





