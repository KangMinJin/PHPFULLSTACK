const nowT = document.querySelector("#nowT");
clock(); // 현재 시각을 화면에 바로 표시하기 위해 호출 (없으면 1초 기다려야함!)
let clockTime = setInterval( clock, 1000 );
function clock(){
    const now = new Date();
    // nowT.innerHTML = now.toLocaleTimeString();
    let amPm = '오전 ';
    let hours = now.getHours();
    let min = now.getMinutes();
    let sec = now.getSeconds();
    if( hours >= 12 ){
        amPm = '오후 ';
        if (hours >= 13) {
            hours -= 12;
        }
    };
    // 마지막에 출력 할 때 문자열로 형변환하는 것이 좋다! - 에러 방지 위해서...!
    nowT.innerHTML = amPm + String(hours).padStart(2,'0') +" : "+ String(min).padStart(2,'0') +" : "+ String(sec).padStart(2,'0'); // 이거 개뻘짓
}
const btn1 = document.querySelector("#btn1");
btn1.addEventListener( 'mousedown', stopClock );
function stopClock() {
    // clearInterval을 해도 clockTime엔 지나간 초가 저장되있기때문에 clockTime=까지 다 써준다!
    clockTime = clearInterval(clockTime);
    // clockTime이 Undefined가 된다!
}
const btn2 = document.querySelector("#btn2");
function restartClock() {
    if (!clockTime) { // clockTime에 값이 제대로 있으면 동작하지 않음!
        clock(); // 현재 시각을 화면에 바로 표시하기 위해 호출 (없으면 1초 기다려야함!)
        clockTime = setInterval(clock, 1000);
    }
}
btn2.addEventListener( 'mousedown', restartClock );