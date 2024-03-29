// 함수

// 함수 선언문
function add( a, b ) {
    return a + b;
}

// 함수 표현식
let add2 = function( a, b ){ // 함수 자체에 이름이 없다 -> 익명 함수(단독으로 사용 불가능!)
    return a + b;
}

// 화살표(arrow) 함수 : 리턴값만 있는 경우 한줄로 표현 가능
let test1 = () => "안녕";

let add3 = ( a, b ) => a + b ;

// 위의 함수를 풀어쓰면 이렇게 된다
// function test1() {
//     return "안녕";
// }

// Function 생성자 함수
let add4 = Function( 'a', 'b', 'return a + b;')

let fuc = function () {
    return "함수입니다";
}