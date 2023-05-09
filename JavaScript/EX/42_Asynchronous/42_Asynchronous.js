// console.log('A');
// console.log('B');
// console.log('C');
// console.log('D');

// 비동기 처리 방식
// console.log('A');
// setTimeout(() => {
//     console.log('B');
// }, 1000);   // 특정 처리를 자바스크립트가 하는게 아닌 브라우저나 타 엔진에게 맡겨
//             // 연산을 하고 자바스크립트에 돌아와서 그제서야 자바스크립트가 값을 보내서 출력한다.
// console.log('C');

// const a = 2;
// const b = 3;
// const sum = function () {
//     setTimeout(() => {
//         return a + b;
//     }, 1000);
    
// }
// console.log(sum()); // undefined가 뜬다!

// 비동기 처리에서의 콜백 지옥(callback hell)
// setTimeout(() => {
//     console.log('a');
//     setTimeout(() => {
//         console.log('b');
//         setTimeout(() => {
//             console.log('c');
//         }, 1000);
//     }, 2000);
// }, 3000);

// 로그인 콜백 지옥 체험

// const Login = {
//     chkInput(id, pw, success, error) {
//         setTimeout(() => {
//             if (id !== '' && pw !== '') {
//                 success({chkId: id, chkPw: pw});
//             } else {
//                 error(new Error('잘못 입력 하셨습니다.'));
//             }
//         }, 500);
//     }
//     , loginUser(id, pw, success, error) {
//         setTimeout(() => {
//             if (id === 'php506' && pw === '506') {
//                 success(id);
//             } else {
//                 error(new Error('없는 유저입니다.'));
//             }
//         }, 500);
//     }
//     , chkAuth(id, success, error) {
//         setTimeout(() => {
//             if (id === 'php506') {
//                 success({authId: id, auth: 'admin'});
//             } else {
//                 error(new Error('권한이 없습니다.'));
//             }
//         }, 500);
//     }
// }

// const id ='php506';
// const pw ='506';

// Login.chkInput(
//     id 
//     , pw
//     , chkData => {
//         Login.loginUser(
//             chkData.chkId
//             , chkData.chkPw
//             , loginId => {
//                 Login.chkAuth(
//                     loginId
//                     , authData => { console.log( `${authData.authId} 유저님의 권한은 ${authData.auth} 입니다.` ); }
//                     , authError => { console.log(authError.message); }
//                 )
//             }
//             , loginError => { console.log(loginError.message); }
//         )
//     }
//     , chkError => { console.log(chkError.message); }
// );

// 콜백 함수
function myCallBack(i) {
    return i + 1;
}

function printNum(fn) {
    console.log(fn(4));
}

printNum(myCallBack);