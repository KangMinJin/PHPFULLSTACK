// 1. 버튼을 클릭 시 아래 내용의 알림이 뜬다.
    // 안녕하세요.
    // 숨어있는 div를 찾아보세요.
const btn1 = document.querySelector('#btn1');
btn1.addEventListener('click', () => alert('안녕하세요!\n숨어있는 div를 찾아보세요~'));

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알림이 뜬다.
    // 두근두근
const div1 = document.querySelector(".div1");

let div1col = 0;

div1.addEventListener('mouseenter', function(){ // 어떤 조건에서 안 쓰는 건 remove하는게 좋다!
    if ( div1col === 0 ) {
        alert('두근두근');
    }
});
// 3. 2번의 영역을 클릭하면 아래 내용의 배경색이 바뀌며 알림이 뜬다.
    // 들켰다!
// 4. 3번의 상태에서 다시 한번 더 클릭하면 아래의 알림이 출력되고 배경색이 원래대로 돌아간다.
    // 다시 숨는다
let div1RandL = Math.floor(Math.random()*100)+1;
let div1RandT = Math.floor(Math.random()*100)+1;
div1.style.left = div1RandL + '%';
div1.style.top = div1RandT + '%';

div1.addEventListener('mousedown', function () {
    div1RandL = Math.floor(Math.random()*100)+1;
    div1RandT = Math.floor(Math.random()*100)+1;
    if (div1col === 0) {
        div1.style.backgroundColor = 'cornflowerblue';
        alert('들켰다!');
        div1col = 1;
    }
    else{
        div1.style.backgroundColor = 'aliceblue';
        div1.style.left = div1RandL + '%';
        div1.style.top = div1RandT + '%'; 
        alert('다시 숨는다~');
        div1col = 0;
    }
});
