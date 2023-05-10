// 동기처리
// function delay() {
//     const delayTime = Date.now() + 2000;
//     while(Date.now() < delayTime) {}
//     console.log('B');
// }
// console.log('A');
// delay();
// console.log('C');

// Promise로 비동기처리
// function delay2() {
//     return new Promise((resolve) => {
//         // while은 JSE에서 처리하기때문에 브라우저에서 딜레이가 돌아올때까지 기다렸다가 CB한꺼번에 출력
//         // const delayTime = Date.now() + 2000;
//         // while(Date.now() < delayTime) {}
//         setTimeout(() => {
//             resolve('B');// 성공 시 return 되는 값
//         }, 2000);
//         // JS는 Stack구조!
//     });
// }
// console.log('A');
// delay2().then(data => console.log(data)); // resolve에서 return 되는 값을 data로 받아서 콘솔에 출력하게 만든다.
// console.log('C');

// async로 비동기 처리
// async는 자동으로 Promise로 바꿔준다
// async function delay3() {
//     const delayTime = Date.now() + 2000;
//     while(Date.now() < delayTime) {}
//     return 'B'; // return이 자동으로 resolve로 치환된다
// }
// console.log('A');
// delay3().then(data => console.log(data));
// console.log('C');

// await : async가 붙은 함수안에서만 사용 가능
function myDelay(ms) {
    return new Promise( resolve => setTimeout(resolve,ms) );
}

async function getA() {
    await myDelay(1000);
    return 'A';
}

async function getB() {
    await myDelay(2000);
    return 'B';
}

// getA()
// .then(strA => console.log(strA));
// getB()
// .then(strB => console.log(strB));

// promise 방식으로 출력
// 체이닝 지옥 (.then안에 또 .then이 연속...)
// getA()
// .then(strA => {
//     return getB()
//         .then(strB => console.log(`${strA} : ${strB}`))
// });

// async를 이용할 경우
async function getAll() {
    const strA = await getA(); // await는 이 처리가 완료될때까지 기다린다.
    const strB = await getB();
    // 둘 다 기다리기 때문에 3초 걸린다!
    console.log(`${strA} : ${strB}`);
}

// getAll();

// 병렬처리 방법
async function getAll2() {
    return Promise.all([getA(), getB()]) // 3초 걸리던게 2초만 걸린다.
    .then( all => all.join(' : '));
}

getAll2()
.then(strAll => console.log(strAll))
.catch('error');