// const promise1 = new Promise((resolve, reject) => {
//     const data = true;

//     if (data) {
//         resolve('성공!');
//     } else {
//         reject('error');
//     }
// });

// promise1
// .then(data => {console.log(data);}) // 성공적으로 수행했을 때 실행되는 코드
// .catch(error => {console.log(error);}) // 실패했을 때 실행되는 코드
// .finally(() => {console.log('fianlly');}) // 성공하든 실패하든 무조건 실행되는 코드

// promise를 함수에 등록해서 사용하기(재사용성 높이기 위해)
function myPromise() {
    return new Promise((resolve, reject) => {
        const data = true;

        if (data) {
            resolve('성공!');
        } else {
            reject('error');
        }
    });
}

myPromise()
    .then(data => {
        console.log(data);
    }) // 성공적으로 수행했을 때 실행되는 코드
    .catch(error => {
        console.log(error);
    }) // 실패했을 때 실행되는 코드
    .finally(() => {
        console.log('fianlly');
    }) // 성공하든 실패하든 무조건 실행되는 코드

// 로그인 콜백 지옥을 promise로 구현
const Login = {
    chkInput(id, pw) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if (id !== '' && pw !== '') {
                    resolve({
                        chkId: id,
                        chkPw: pw
                    });
                } else {
                    reject(new Error('잘못 입력 하셨습니다.'));
                }
            }, 500);
        });

    }
    , loginUser(id, pw) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if (id === 'php506' && pw === '506') {
                    resolve(id);
                } else {
                    reject(new Error('없는 유저입니다.'));
                }
            }, 500);
        });
    }
    , chkAuth(id) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if (id === 'php506') {
                    resolve({
                        authId: id,
                        auth: 'admin'
                    });
                } else {
                    reject(new Error('권한이 없습니다.'));
                }
            }, 500);
        });
    }
}

const id = 'php506';
const pw = '506';

Login.chkInput(id,pw)
.then(chkData => Login.loginUser(chkData.chkId, chkData.chkPw))
.then(loginId => Login.chkAuth(loginId))
.then(authData => console.log(`${authData.authId}유저님, ${authData.auth}권한 입니다.`))
.catch(error => console.log(error.message))