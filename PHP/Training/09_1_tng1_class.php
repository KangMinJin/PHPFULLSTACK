<?php
    // $car_name : 차 이름을 저장하는 멤버변수
    // $car_color : 차 색깔을 저장하는 멤버변수

    // method명 : car_make
    // parameter명 : string $param_name, string $param_color
    // 기능 : 멤버변수에 값을 셋팅

    // method명 : car_out
    // 기능 : 자동차 이름과 색깔을 출력 ($car_color."색 ".$car_name)
    class Car
    {
        public $car_name;
        public $car_color;

        public function car_make($param_name,$param_color)
        {
            $this->car_name = $param_name;
            $this->car_color = $param_color;
        }
        public function car_out()
        {
            echo $this->car_color."색 ".$this->car_name;
        }
    }

    $obj_Car = new Car;
    $obj_Car->car_make("모닝","밀키 베이지");
    $obj_Car->car_out();
    
?>