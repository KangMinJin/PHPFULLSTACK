CREATE TABLE salaries (
	emp_no INT(11)
	,salary INT(11)
	,from_date DATE
	,to_date DATE
	,CONSTRAINT PK_SALARIES_emp_no_from_date PRIMARY KEY(emp_no, from_date)
	,CONSTRAINT FK_SALARIES_emp_no FOREIGN KEY (emp_no) REFERENCES employees (emp_no)
);

ALTER TABLE departments ADD COLUMN dept_name VARCHAR(40) NOT NULL;



SELECT * FROM salaries;

CREATE TABLE titles (
	emp_no INT(11)
	,title VARCHAR(50) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT PK_TITLES_emp_no_title_from_date PRIMARY KEY (emp_no, title, from_date)
	,CONSTRAINT FK_TITLES_emp_no FOREIGN KEY (emp_no) REFERENCES employees (emp_no)
);

COMMIT;

CREATE INDEX emp_no ON salaries (emp_no);

DROP INDEX FK_DEPT_EMP_dept_no ON dept_emp;

CREATE TABLE departments (
	dept_no CHAR(4)
	,dapt_name VARCHAR(40) NOT NULL
	,CONSTRAINT PK_DEPARTMENTS_dept_no PRIMARY KEY (dept_no)
);
CREATE INDEX dept_no ON dept_emp (dept_no);

ALTER TABLE departments ADD UNIQUE dept_name (dept_name);

CREATE TABLE dept_emp (
	emp_no INT(11)
	,dept_no CHAR(4) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,PRIMARY KEY (emp_no, dept_no)
	,CONSTRAINT FK_DEPT_EMP_emp_no FOREIGN KEY (emp_no) REFERENCES employees (emp_no)
	,CONSTRAINT FK_DEPT_EMP_dept_no FOREIGN KEY (dept_no) REFERENCES departments (dept_no)
);

DROP TABLE dept_manager;

CREATE TABLE dept_manager (
	dept_no CHAR(4) NOT NULL
	,emp_no INT(11) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT PK_DEPT_MANAGER_dept_no_emp_no PRIMARY KEY (dept_no, emp_no)
--	,CONSTRAINT FK_DEPT_EMP_emp_no FOREIGN KEY (emp_no) REFERENCES employees (emp_no)
--	,CONSTRAINT FK_DEPT_EMP_dept_no FOREIGN KEY (dept_no) REFERENCES departments (dept_no)
);

ALTER TABLE dept_emp ADD CONSTRAINT FK_DEPT_EMP_emp_no FOREIGN KEY (emp_no) REFERENCES employees (emp_no);

ALTER TABLE dept_manager ADD CONSTRAINT FK_DEPT_EMP_dept_no1 FOREIGN KEY (dept_no) REFERENCES departments (dept_no);


CREATE INDEX dept_no ON dept_manager (dept_no);





