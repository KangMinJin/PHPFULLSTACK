// setTimeout(() => {
//     console.log('A');
// }, 3000);
// setTimeout(() => {
//     console.log('B');
// }, 2000);
// setTimeout(() => {
//     console.log('C');
// }, 1000);

// 1. 콜백 함수를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.

// setTimeout(() => {
//     console.log('A');
//     setTimeout(() => {
//         console.log('B');
//         setTimeout(() => {
//             console.log('C');
//         }, 1000);
//     }, 2000);
// }, 3000);

// 2. promise를 이용해서 A,B,C 순서로 출력하라.
// ( Promise를 함수로 등록해서 구현 )
// function myPromise() {
//     return new Promise((resolve, reject) => {
//         const data = true;
//         setTimeout(() => {
//             if (data) {
//                 resolve('A');
//             } else {
//                 reject('에러');
//             }
//         }, 3000);
//     });
// }
// const printABC = {
//     chkABC(a,b,c) {
//         return new Promise((resolve,reject) => {
//             if (a!==''&&b!==''&&c!=='') {
//                 resolve({
//                     chka: a
//                     ,chkb: b
//                     ,chkc: c
//                 });
//             } else {
//                 reject(new Error('에러'));
//             }
//         })
//     }
//     , printA(a) {
//         return new Promise((resolve) => {
//             setTimeout(() => {
//                 resolve(console.log(a))
//             }, 3000);
//         }
//     )}
//     , printB(b) {
//         return new Promise((resolve) => {
//             setTimeout(() => {
//                 resolve(console.log(b))
//             }, 2000);
//         })
//     }
//     , printC(c) {
//         return new Promise((resolve) => {
//             setTimeout(() => {
//                 resolve(console.log(c))
//             }, 1000);
//         })
//     }
// }
// const printABC = {
//     chkABC(a,b,c) {
//         return new Promise((resolve) => {
//             if (a!==''&&b!==''&&c!=='') {
//                 resolve({
//                     chka: a
//                     ,chkb: b
//                     ,chkc: c
//                 });
//             } else {
//                 reject(new Error('에러'));
//             }
//         })
//     }
//     , printA(a) {
//         return new Promise((resolve) => {
//             setTimeout(() => {
//                 resolve(console.log(a))
//             }, 3000);
//         }
//     )}
//     , printB(b) {
//         return new Promise((resolve) => {
//             setTimeout(() => {
//                 resolve(console.log(b))
//             }, 2000);
//         })
//     }
//     , printC(c) {
//         return new Promise((resolve) => {
//             setTimeout(() => {
//                 resolve(console.log(c))
//             }, 1000);
//         })
//     }
// }
// myPromise()
// .then(data => {console.log(data);})
// .catch(error => {console.log(error);})
const d ='피';
const e ='곤';
const f ='해';
// printABC.chkABC(d,e,f)
// .then(chkData => printABC.printA(chkData.chka))
// .then(() => printABC.printB(chkData.chkb))
// 위에건 다 개뻘짓...^^
// 코드의 재사용성을 위해서 중복되는 부분은 합치고, 따로 빼서 쓸 수 있는건 빼서 쓴다!
// 위에 코드는 출력하는 부분, 딜레이시간이 다른데 이 부분만 따로 빼면 된다...
function myPromise(ms, i){
    return new Promise((resolve) => {
        setTimeout(() => {
            console.log(i);
            resolve();
        }, ms);
    });
}

myPromise(1500, d)
.then(()=> myPromise(1000, e))
.then(()=> myPromise(500, f));