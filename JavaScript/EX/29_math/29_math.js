
// console.log( Math.ceil(3.33) ); // 소수점 올림
// console.log( Math.round(3.5) ); // 반올림
// console.log( Math.floor(3.8) ); // 소수점 버림

// console.log( Math.random() ); // 0이상 1미만 사이의 랜덤한 숫자.( 0 <= n > 1)

// random() 메소드를 이용해서 1~10까지 랜덤으로 출력하라.
console.log( Math.floor(Math.random() * 10) + 1 );

// random() 메소드를 이용해서 1~5까지 랜덤으로 출력하라.
console.log( Math.floor(Math.random() * 5) + 1 );

// random 테스트 하기( 100만건 )
// let ran = Math.random();
// console.log( ran );
// for( let i = 0; i < 1000000; i++) {
//     ran = i;
// }
// console.log( ran );