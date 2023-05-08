// 타이머 함수

// 1. setTimeout() / clearTimeout()
const timeOut = setTimeout(() => console.log('A'), 2000); // 타이머 셋팅
clearTimeout(timeOut); // 타이머 제거

// 2. setInterval() / clearInterval()
const myInterval = setInterval(() => console.log('A'), 1000); // 인터벌 셋팅
clearInterval(myInterval); // 인터벌 제거

// ex1. 1~5를 콘솔에 1초마다 출력하시오
// for (let i = 0; i < 5; i++) {
//     // for (let j = 1; j < 6; j++) {
//     //     var fiveInterval = setInterval(() => console.log(j), 1000);
//     //     clearInterval(fiveInterval);
//     // };
//     // console.log(i);
// };
// for (let j = 1; j < 6; j++) {
//     var Intervall = setInterval(() => console.log(i), 1000);
//     for (let i = 1; i < 6; i++) {
//         clearInterval(Intervall);
//     }
// }

// let interval1 = setInterval(() => console.log('1'), 1000);
// interval1 = setInterval(() => console.log('2'), 2000);
// interval1 = setInterval(() => console.log('3'), 3000);
// interval1 = setInterval(() => console.log('4'), 4000);
// interval1 = setInterval(() => console.log('5'), 5000);
// clearInterval(interval1);
let i = 1;
// let fiveInterval = setInterval(intervalFunc, 1000);
// function intervalFunc() {
//     console.log(i);
//     if (i++ === 5) {
//         clearInterval(fiveInterval);
//     };
// }
const interval1 = setInterval(() => {
    console.log(i);
    if (i++ === 5) {
        clearInterval(interval1); // i가 5일때 인터벌 제거
    }
}, 1000);