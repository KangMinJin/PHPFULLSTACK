// 인라인 이벤트 등록
// html 파일의 11행, 14행 참조!
onclick

// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function() {
    window.open("http://www.google.com"); // window.open()을 쓰면 새창으로 뜬다!
};

// addEventListner(eventType, function) 방식 ** 가장 많이 쓰이는 방식 **
const btn2 = document.querySelector('#btn2'); // 원본 데이터가 변경되는걸 방지하기 위해서 const를 쓴다(var나 let은 재정의 가능하기에)
// const btn2 = document.getElementById('btn2');

// 현재 창에서 열기
// btn2.addEventListener( 'click', () => {
//     location.href = 'http://www.daum.net';
// });

// 팝업창 열기
let newWindow = null;
btn2.addEventListener( 'click', () => {
    newWindow = open('http://www.daum.net', '', 'width=500 height=500');
});

// 팝업창 닫기
const btn3 = document.querySelector('#btn3');
btn3.addEventListener( 'click', () => newWindow.close());

// 이벤트 삭제
// removeEventListner(eventType, function)
// addEventListner() 로 등록한 이벤트의 아규먼트와 같은 아규먼트를 셋팅해야 삭제된다.
// btn3.removeEventListener( 'click', popUpClose(newWindow));

// function popUpClose(win) {
//     win.close();
// };

// 이벤트 타입
// 1. 마우스 이벤트
// - mousedown - 마우스가 요소 안에서 클릭이 눌릴 때
const div1 = document.querySelector('.div1');
div1.addEventListener( 'mousedown', () => alert('div1 클릭'));
// - mouseenter - 마우스포인터가 요소 안으로 진입 했을 때
div1.addEventListener( 'mouseenter', () => alert('div1 진입'));