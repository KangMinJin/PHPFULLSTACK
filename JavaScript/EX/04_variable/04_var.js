// console.log("안녕하세요 js파일입니다.", "두번째문장!");// 콤마로 구분해서 여러 문장 넣을 수 있다!

// ---------------
// 변수
// ---------------
// 예전 변수 선언 방식
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이"; // 중복 선언 가능
// u_name = "갑돌이"; // 재할당 가능
// console.log( u_name );

// 현재 변수 선언 방식
// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// // let u_age = 30; // 중복 선언 불가능
// u_age = 30; // 재할당 가능
// console.log( u_age );

// 상수 : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "남자";
// gender = "여자"; // 에러는 안 뜨나 재할당은 안 된다!

// ---------------
// 스코프
// ---------------

// 전역 스코프 - 되도록이면 사용하지 않는것을 권장함.(에러 줄이기 위해)
let u_name = "홍길동";

// 함수 레벨 스코프
function test(){
    console.log( u_name );
    let u_age = 30; // 함수 안에 선언된 변수이므로 함수 밖에선 접근 X
    console.log( u_age );
}

// 블록(중괄호) 레벨 스코프 -  중괄호{}안에서 선언된 변수는 그 중괄호 안에서만 사용 가능.
// function test1(){
//     if ( true ) {
//         let v_test1 = "함수 테스트1";
//         var v_var1 = "var로 선언"; // var는 함수 레벨 스코프이므로 블록 밖에서도 사용 가능.
//     }
//     // console.log( v_test1 );
//     console.log( v_var1 );
// }
function test1(){
    let v_test1 = "함수 테스트1"; // 블록 레벨 스코프는 최상단에 적어두면 사용 할 수 있다! - 내가 사용 할 변수는 최상단에 선언한다.
    if ( true ) {
        var v_var1 = "var로 선언";
    }
    console.log( v_test1 );
    console.log( v_var1 );
}

//--------------------
// 호이스팅 ( hoisting )
//--------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// 인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올려지는 것
console.log( hTest() ); // 함수는 이렇게 적어도 호이스팅 가능.
console.log( "63 Line : " + varTest ); // var 로 선언한 경우에는 undefined. 출력은 되지만 실제값은 안 들어가있다!
// console.log( "64 Line : " + letTest ); // let으로 선언한 경우에는 undefined로 초기화가 되지 않는다!
// console.log( "65 Line : " + constTest ); // const도 위와 마찬가지.

function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";
console.log( "72 Line : " + varTest ); // 선언한 뒤로 출력시키면 실제 값 셋팅이 된다!

let letTest = "let 변수";
const constTest = "const 상수";