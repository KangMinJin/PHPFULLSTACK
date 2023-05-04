// 제어문

//------------------------------
// 조건문 ( if, switch )
//------------------------------

if( 1 > 0 ) {
    console.log("1은 0보다 크다!");
} else if( 1 < 0 ) { // 자바스크립트는 이렇게 작성한다!
    console.log("1은 0보다 작다!");
} else {
    console.log("기타 등등~");
}

let u_age = 30;
switch ( u_age ) {
    case 20:
        console.log("20살");
        break;

    case 10:
        console.log("10살");
        break;

    default:
        console.log( u_age + "살");
        break;
}

//------------------------------------------------------------
// 반복문 ( while, do_while, for, foreach, for...in, for...of )
//------------------------------------------------------------
// let num = 0;
// while ( num <= 3 ) {
//     console.log(num);
//     num++;
// }
let dan = 2;
let multi = 1;
// console.log( dan + "단" );
// do {
//     console.log( dan + " X " + multi + " = " + (dan * multi) );
//     multi++;
// } while ( multi <= 9 );

// for (let i = 1; i <= 9; i++) {
//     console.log( dan + " X " + i + " = " + (dan * i) );
// }

// foreach : 순수 배열만 루프 가능 - php와는 성격이 다르다
let arr = [1, 2, 3, 4];
arr.forEach( function ( val, key ){ // 함수를 매개변수로 받는다...! val과 key 둘 다 뽑아낼 수 있음! php랑 순서는 반대!
    console.log( key + " => " + val );
} );

// for...in : 모든 객체를 루프 가능 (key 값이 문자열인 객체도 가능!)
// arr = {
//     u_name: "홍길동"
//     ,u_age: 0
// };
// // for ( let i in arr ) { // i 에 key 값을 받는다
// //     console.log( i + " : " + arr[i] );
// // }

// // for...of : Iterable 한 객체에만 사용 가능(인덱스 배열만 가능)
// arr = [ 5, 4, 3 ]
// arr.num = 2; // arr = [ 5, 4, 3, num: 2 ] 이렇게 추가된 상태.
// for ( let i of arr ) { // i 에 value 값을 받는다
//     console.log( i ); // 5,4,3까지만 출력된다!( num: 2 는 인덱스 배열이 아니기에 )
// }
// for (let i of "test") { // 문자열을 하나씩 출력 가능.
//     console.log( i );
// }