// 1. 1~ 입력값의 요소를 가지는 배열을 만들어라.

let num = 100;
let arr = [];
for (let i = 0; i < num; i++) {
    arr[i] = i + 1;
}
// 2. 그 배열에서 소수만 찾아서 새로운 배열을 만들어라.
let arr_f = arr.filter(
    function ( a ){
        for (let i = 2; i * i <= a; i++) {
            if ( a % i === 0 ) {
                return false;
            }
        }
        return a !== 1;
    }
)
// 3. 그 배열을 alert로 출력하라.
// alert( "1에서 " + num + "까지의 소수 : " + arr_f );

// 짝수 구하기
let arr_even = arr.filter( val => val % 2 === 0 );
console.log( arr_even );

// 홀수 구하기
let arr_odd = arr.filter( val => val % 2 === 1 );
console.log( arr_odd );