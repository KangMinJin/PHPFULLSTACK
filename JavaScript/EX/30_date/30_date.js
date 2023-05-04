// DATE
const NOW = new Date('2023-04-30 15:20:30.123');

// getFullYear() : 연도만 가져오는 메소드
console.log( "연도 : " + NOW.getFullYear() );

// getMonth() : 월을 가져오는 메소드
console.log( "월 : " + ( NOW.getMonth() + 1 ) ); // **0 ~ 11 을 가져오기 때문에 + 1 을 해줘야 현재 월과 같아진다!**

// getDate() : 날짜를 가져오는 메소드
console.log( "일 : " + NOW.getDate() );

// getDay() : 요일을 가져오는 메소드 ( 일 ~ 토요일 까지 0 ~ 6 으로 가져온다! )
console.log( "요일 : " + NOW.getDay() );

// getTime() : 1970/01/01 0시 0분 0초 기준으로 몇 밀리초가 지났는지 가져온다
console.log( "시간(Linux) : " + NOW.getTime() );

// getHours() : 시간을 가져오는 메소드
console.log( "시간 : " + NOW.getHours() );

// getMinutes() : 분을 가져오는 메소드
console.log("분 : " + NOW.getMinutes() );

// getSeconds() : 초를 가져오는 메소드
console.log("초 : " + NOW.getSeconds() );

// getMilliseconds() : 밀리초를 가져오는 메소드 ( 3.'123' 이 부분. -> 소수점 부분만 가져온다! )
console.log("밀리초 : " + NOW.getMilliseconds() );

// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘부터 몇 일 전인지 출력하시오.
const PAST_D = new Date('2022-09-30 19:20:10');
const NOW_D = new Date();

let ddd= NOW_D.getTime() - PAST_D.getTime();
let days = Math.ceil( (NOW_D.getTime() - PAST_D.getTime()) / (1000*60*60*24) );
console.log( days + "일" );

