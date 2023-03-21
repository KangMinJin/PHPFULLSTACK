CREATE TABLE students (
	stud_no INT(15)
	,stud_birth DATE NOT NULL
	,stud_name VARCHAR(30) NOT NULL
	,stud_addr VARCHAR(100) NOT NULL
	,stud_tel INT(11) NOT NULL
	,stud_gender ENUM('0','1','2') NOT NULL
	,stud_entry_date DATE NOT NULL
	,stud_gradu_date DATE
	,stud_state ENUM('0','1','2','3')
	,CONSTRAINT PK_STUDENTS_stud_no PRIMARY KEY(stud_no)
); 

CREATE TABLE professors (
	prof_no INT
	,prof_name VARCHAR(30) NOT NULL
	,prof_birth DATE NOT NULL
	,degree_no INT NOT NULL
	,prof_mail VARCHAR(50) NOT NULL
	,prof_title VARCHAR(20) NOT NULL
	,lab_no INT(4)
	,prof_gender ENUM('0','1','2') NOT NULL
	,hire_date DATE NOT NULL
	,CONSTRAINT PK_PROFESSORS_prof_no PRIMARY KEY(prof_no)
); 

CREATE TABLE textbooks (
	txtbk_no INT(13)
	,txtbk_name VARCHAR(50) NOT NULL
	,CONSTRAINT PK_TEXTBOOKS_txtbk_no PRIMARY KEY(txtbk_no)
);


CREATE TABLE subjects (
	sub_no INT
	,prof_no INT NOT NULL
	,txtbk_no INT NOT NULL
	,sub_name VARCHAR(30) NOT NULL
	,sub_capacity INT(2) NOT NULL
	,sub_term DATE NOT NULL
	,sub_class_no INT(4) NOT NULL
	,sub_start_time TIME NOT NULL
	,sub_end_time TIME NOT NULL
	,req_comp ENUM('0', '1') NOT NULL
	,CONSTRAINT PK_SUBJECTS_sub_no PRIMARY KEY(sub_no)
);
-- MariaDB는 PK명을 정해줘도 그 PK명으로 정해지지 않고 PRIMARY KEY고정.

CREATE TABLE grades (
	stud_no INT
	,sub_no INT
	,sub_score INT NOT NULL
	,sub_rank INT NOT NULL
	,com_date DATE NOT NULL
);

ALTER TABLE subjects ADD COLUMN txtbk_no INT(13) NOT NULL;
-- FK 설정할때는 column 만들고 설정한다. 아니면 위처럼 column추가 후 설정해야 한다.

ALTER TABLE subjects
	ADD CONSTRAINT FK_TEXTBOOKS_txtbk_no
	FOREIGN KEY (txtbk_no)
	REFERENCES textbooks(txtbk_no);

ALTER TABLE grades
	ADD CONSTRAINT PK_GRADES_stud_no_sub_no
	PRIMARY KEY (stud_no, sub_no);






