SELECT *
FROM employees
WHERE emp_no = 10001
   OR emp_no = 10005; 

SELECT emp_no
FROM salaries
WHERE salary <= 60000;

SELECT emp_no
FROM salaries
WHERE salary >= 60000
  AND salary <= 70000;
-- between은 잘 안 쓴다.(속도 느림!)

SELECT *
FROM employees
WHERE emp_no IN(10001, 10005);
-- in도 속도가 느려서 잘 안 쓴다.

SELECT *
FROM employees
WHERE first_name LIKE('m%');
-- like는 특정 문자열을 포함한 자료를 찾을 떄 쓴다. m% 이면 m으로 시작하는 모든것.
-- like도 리소스 많이 사용. 어떻게 짜는지에 따라 성능차이 천차만별.
-- '_'(언더바) 는 문자 수. m___면 m으로 시작하는 4문자를 찾는다.

-- 직급명에 'Engineer'가 포함된 사원의 사번과 직급 조회하기
SELECT emp_no, title
FROM titles
WHERE title LIKE('%Engineer%');
-- 'Engineer'가 포함되기만 하면 되니까 %를 앞 뒤에 다 넣어준다. ('%Engineer%')

SELECT DISTINCT *
FROM dept_emp;
-- distinct 는 검색한 결과의 중복되는 레코드를 생략.

SELECT *
FROM employees
LIMIT 10 OFFSET 4;
-- limit는 리미트에 적어준 숫자만큼만 검색.
-- offset을 붙여주면 offset에 적어준 숫자만큼을 뛰어넘고 리미트만큼 검색.(offset 4까지 뛰어넘고 5부터 10번째까지.)
-- 속도 느려서 현업에선 사용안한다.

SELECT *
FROM employees
ORDER BY emp_no DESC;
-- order by 는 정렬을 할 떄 사용한다. 뒤에 ASC(오름차순(기본)) DESC(내림차순)를 붙여서 사용.

-- 사원이름 오름차순으로 정렬.
SELECT *
FROM employees
ORDER BY first_name ASC, last_name DESC;
-- order by 는 콤마(,)를 써서 여러개 사용 가능. 콤마 전의 조건이 먼저 적용된 후 뒤의 조건 적용.

SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;
-- 레코드의 갯수를 세 주는 count. COUNT(컬럼멸)

SELECT AVG(salary)
FROM salaries;
-- 평균을 구해주는 AVG(Avarage). AVG(컬럼명)

SELECT MAX(salary)
FROM salaries;
-- 최댓값을 구해주는 MAX.

SELECT MIN(salary)
FROM salaries;
-- 최솟값을 구해주는 MIN.

SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 70000;
-- 그룹으로 묶어서 조회: GROUP BY 그룹으로 묶고싶은 컬럼명 HAVING 집계함수조건(생략 가능)

-- 사원별 급여의 평균을 조회해 주세요.
SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no;
-- emp_no를 그룹으로 묶어서 조회하기 위해서 → GROUP BY emp_no

-- 사원별 급여의 평균30,000~50,000원인 사원번호를 조회해 주세요.
SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no
HAVING avg_s >= 30000
   AND avg_s <= 50000;
-- AS 별칭 으로 이름을 주면 결과창에도 AVG(salary) 가 avg_s로 바뀐다.

SELECT CONCAT(last_name, ' ', first_name) AS fullname
FROM employees;
-- concat은 문자열을 합친다. 별칭을 fullname으로 줬으므로 결과창에서도 concat(last_name, ' ', first_name)이 아니고 fullname으로 뜬다.

-- 서브쿼리 : 쿼리 안에 또 다른 쿼리가 있는 형태.
SELECT *
FROM dept_manager
WHERE dept_no = (
						SELECT dept_no
						FROM dept_manager
						WHERE emp_no = 110344
					 );
-- emp_no가 110344인 사원의 dept_no와 같은 dept_no를 가진 레코드 출력.

SELECT *
FROM dept_manager
WHERE emp_no = ANY(
					  SELECT emp_no
					  FROM dept_manager
					  WHERE dept_no = 'd009'
					);
-- '=' 은 1대 1 관계. 서브쿼리의 값은 하나만 나와야 한다. 다수의 레코드가 나오면 에러 발생.
-- 'IN' 을 사용해주면 서브쿼리의 값이 다수가 나와도 가능.
-- ANY 는 여러개의 비교값 중 하나라도 만족하면 true. '= ANY' 를 써주면 IN과 결과 같은 값 나온다. (IN과 같은 기능)

SELECT *
FROM dept_manager
WHERE dept_no = ALL (
						SELECT dept_no
						FROM dept_manager
						WHERE emp_no IN(110344, 110303)
					 );
-- ALL 은 전체값을 비교해서 모두 만족해야 true. 모든 값을 만족해야 값을 가져온다.

-- 사원별 급여 평균이 70,000 이상인 사원의 사번, 이름, 성, 성별을 조회해 주세요.
SELECT emp_no, CONCAT(first_name, ' ', last_name) AS fullname , gender
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no
						HAVING AVG(salary) >= 70000
					 );
-- 그룹별 집계가 필요하므로 WHERE를 쓰지 말고  → GROUP BY emp_no와
-- AVG(salary) >= 70000 라는 기준을 정하기 위해 HAVING절 사용.

SELECT *
FROM titles
WHERE emp_no = 10009
  AND to_date >= NOW();
-- NOW() 함수는 현재 날짜와 시간을 반환한다.

-- 현재 직책이 Senior Engineer인 사원의 사원번호, 성을 조회하라.
SELECT emp_no, last_name
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM titles
						WHERE title = 'Senior Engineer'
						  AND to_date >= NOW()
					);

-- 현재 재직중인 사원 수.					  
SELECT COUNT(emp_no)
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM titles
						WHERE to_date >= NOW()
					);					  