<?php
    // CLASS : 동종의 객체들을 하나의 그룹으로 묶은 것

    class Student // 클래스 명칭은 첫 글자를 대문자로 해 준다. 암묵적 약속
    {
        // 클래스 멤버 변수
        public $stud_name; // 어디서든 접근 가능
        private $stud_id; // Student Class 내에서만 접근 가능
        protected $stud_age; // 상속 Class 내에서만 접근 가능
        // 접근 제어 지시자 : public, private, protected

        // Class 안에 있는 function을 method 라고 부른다.
        public function print_student($param_std_name, $param_std_age)
        {
            $result_name =  "이름 : ".$param_std_name;
            $result_age = "나이 : ". $param_std_age."세";
            echo $result_name;
            echo "\n";
            echo $result_age;
        }
        // private객체를 사용할 수 있는 방법
        public function set_stud_id($param_id)
        {
            // this 포인터 : class자기 자신을 가르키고있음.
            $this->stud_id = $param_id;
        }

        public function get_stud_id()
        {
            return $this->stud_id; // 함수 하나는 하나의 기능만 있어야한다 -> 활용성을 위해서
        }
    }
    // class를 초기화
    $obj_Student =  new Student; // Class 불러올때 new를 앞에 붙이고 변수에 넣어서 선언하고 사용한다
    // class의 method를 호출
    // $obj_Student->print_student("홍길동","27"); //Class 안의 method를 불러올 때 $변수 -> method이름(매개변수...파라미터);
    // class의 멤버 변수 사용방법
    // $obj_Student->stud_name = "갑돌이";
    // echo $obj_Student->stud_name;

    // 지시자가 private, protected이기 때문에 접근 권한이 없다.
    // $obj_Student->stud_id = "갑순이"; //접근 불가
    // $obj_Student->stud_age = "15"; //접근 불가

    // 위와 같기 때문에 getter, setter로 private객체에 접근
    echo $obj_Student->set_stud_id("갑순이id"); // setter
    echo $obj_Student->get_stud_id(); //getter
?>