// 1. 요소를 선택하는 방법
//  1-1. id로 선택하는 방법
const title = document.getElementById('title');
title.style.color = 'cornflowerblue';

//  1-2. 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');

// 탕수육은 노란색, 짬뽕은 빨강색으로 변경
li[1].style.color = 'gold';
li[2].style.color = 'tomato';

// 탕수육, 볶음밥, 깐풍기는 배경 색상을 오렌지색
// 짜장면, 짬뽕, 라조기는 배경 색상을 베이지색
// let num = li.length;
// for (let i = 0; i < num; i++) {
//     if( i % 2 === 0 ) {
//         li[i].style.backgroundColor = 'aliceblue';
//     }
//     else {
//         li[i].style.backgroundColor = '#cbeaff';
//     }
// };

//  1-3. 클래스명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName('none-li');

//  1-4. CSS 선택자로 요소를 선택하는 방법
// querySelector() : 복수의 요소가 있다면 첫번째 것만 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none-li'); // '짜장면'이 적힌 li[0] 만 선택

// querySelectorALL() : 복수의 요소라면 전부 선택
const li3 = document.querySelectorAll('.none-li'); // none-li 클래스 li 모두 선택

// 2. 요소 조작하기

//  2-1. 콘텐츠를 조작하는 방법
// textContent : 순수한 텍스트 데이터를 전달(html태그도 문자열로 취급), 이전의 태그들은 모두 제거
title.textContent = '<span>textContent로 바꿈</span>';

// innerHTML : 태그는 태그로 인식해서 전달(html태그 그대로 사용), 이전의 태그들은 모두 제거
title.innerHTML = '<span>innerHTML로 바꿈</span>';

// 컨텐츠를 전달은 해주나 그 밑에 있는 자식 요소들을 다 삭제하고 들어간다.
const subtitle = document.querySelector('#div1');
// subtitle.innerHTML = '이것도 바꿈';
// subtitle.textContent = '이것도 바꿈'; // 둘 다 h2 태그 사라진다!

// 요소에 속성을 추가
const it = document.querySelector('#it');
// it.setAttribute('placeholder','setAttribute로 삽입');
const aa = document.querySelector('#aa');
aa.setAttribute('href','http://www.naver.com');

// 요소의 속성을 제거
it.removeAttribute('placeholder');
// aa.removeAttribute('href');

it.addEventListener('mouseenter', function(){
    it.setAttribute('placeholder','마우스 엔터!');
})
it.addEventListener('mouseleave', function(){
    it.removeAttribute('placeholder');
})

// 요소의 스타일링 (text-decoration 같이 -으로 연결된건 textDecoration처럼 대문자로 바꿔준다!)
// 인라인으로 스타일 추가
// aa.style.textDecoration = 'none';
// aa.style.color = 'skyblue';

// 클래스로 스타일 추가
aa.classList.add('aa1', 'aa2', 'aa3'); // add 는 가변 파라미터

// 새로운 요소 만들기
// 요소 만들기
const cli = document.createElement('li');
cli.innerHTML = '야끼우동';

// 요소를 자식요소의 가장 마지막에 삽입
const ul = document.querySelector('ul'); // 부모 요소 선택
// ul.appendChild(cli); // append는 가장 뒤에 추가한다!

// 요소를 특정 위치에 삽입하는 방법
// li[2];
const zzam = document.querySelector('li:nth-child(3)'); // 원하는 위치 뽑아오기
ul.insertBefore( cli, zzam );

// 해당 요소를 지우는 방법
// cli.remove(); // HTML출력만 지울 뿐 변수는 그대로 남아있다.

// 라조기와 깐풍기 사이에 "잡채밥", "동파육"을 순서대로 넣고
// 배경 색깔 제대로 나오도록 수정
const zap = document.createElement('li');
zap.innerHTML = '잡채밥';
const dong = document.createElement('li');
dong.innerHTML = '동파육';

const ccan = li[6];
ul.insertBefore( zap, ccan );
ul.insertBefore( dong, ccan );

let num = li.length;
for (let i = 0; i < num; i++) {
    if( i % 2 === 0 ) {
        li[i].style.backgroundColor = 'aliceblue';
    }
    else {
        li[i].style.backgroundColor = '#cbeaff';
    }
};
