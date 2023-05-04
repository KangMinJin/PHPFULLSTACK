// 인라인 이벤트 등록
// html 파일의 11행, 14행 참조!
onclick

// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function() {
    window.open("http://www.google.com"); // window.open()을 쓰면 새창으로 뜬다!
}