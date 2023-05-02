// 데이터 타입

// 데이터 타입 확인하는 함수 typeof();

//---------------
// 기본 데이터 타입
//---------------

// 숫자 (number)
let num = 1;
function test() {
    let num = 2;
    console.log("함수 : " + num );
}
console.log("전역 : " + num); // php처럼 함수 안의 변수와 밖의 변수는 다르다!

// 문자열 (string)
let str = "안녕";

// 불리언 (boolean)
let bool = true;

// null
let test1 = null;

// undefined
let test2;

// 심볼 (symbol) - ecma 6부터 추가됨. 유일성을 가짐.(값이 같아보여도 다름)
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다."); // 안에 담겨있는 값이 같아도 심볼은 서로 다르다!( 값이 같아도 === 로 비교하면 false 나옴)

//---------------
// 객체 타입 ( JSON - JavaScript Object Notation )
//---------------

let obj1 = {
    u_name: "홍길동" // u_name만 뽑아올 땐 obj1.u_name; 하면 "홍길동"만 뽑아온다!
    ,u_age: 30
    ,u_gender: "남자"
    ,test: function() { // 이름이 없다! - 익명 함수
        console.log("객체 함수 test") // 객체 안의 함수도 가능!
    } // obj1.test(); 이런식으로 사용한다!
    ,addr: { // 2, 3차원 배열처럼 obj1.addr.addr1 이런식으로 칮아간다.
        addr1: "대구" // 객체 안의 객체도 가능!
        ,addr2: "중구"
    }
}

// 배열 (Array) - 연상배열은 php의 특징! 자바나 자바스크립트는 연상배열 X.
let arr = [ "탕수육", "짜장면", "짬뽕" ];