let arr = [1, 2, 3, 4, 5];

// push() 메소드 : 배열에 값 추가
arr.push(6);
// arr[5] = 6; 이런식으로도 넣을 수 있으나
// arr[12] = 11; arr = [1,2,3,4,5,6,7, empty x 5, 11] 이런식으로 빈 공간도 들어가게되어 비권장.

// delete : 배열의 값 삭제(인덱스는 empty로 남아 있다.)
delete arr[5]; // arr = [1,2,3,4,5,empty];

// splice() 메소드 : 배열의 요소를 삭제 또는 교체
arr = [1, 2, 3, 4, 5];
arr.splice(2, 1); // 배열에서 arr[2]자리의 값 삭제.
arr.splice(2, 0, 3); // 배열의 arr[2]자리에 3을 추가한다. (삭제 X)
arr.splice(2, 1, 3); // 배열에서 arr[2] 자리의 값을 삭제하고 그 자리에 3을 넣는다.
arr.splice(2, 1, 3, 5, 6, 7); // 3번째 매개변수부터는 가변 파라미터로 모든 값을 추가.

// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용
let arr2 = [1, 2, 3, 4, 5];
arr2.indexOf(1); // 0을 반환. 제일 앞에 있는 요소만 찾고 작동 끝.

// lastIndexOf() 메소드 : 배열에서 특정 요소를 뒤에서 부터 찾는데 사용
arr2 = [1, 2, 3, 4, 3, 5, 6, 6, 1];
arr2.lastIndexOf(1); // 8을 반환. 제일 뒤에 있는 요소 찾고 작동 끝.
let fileName = 'javaScript.log.php';
// fileName = 'ttt.aa.b';

// 아래처럼 콘솔에 출력할 수 있게 만드시오
// javaScript
// log
// php

// let file1 = fileName.slice(0, fileName.indexOf('.'));
// let file2 = fileName.slice(fileName.indexOf('.')+1, fileName.indexOf('.',fileName.indexOf('.')+1));// 걍 lastIndexOf 쓰면 되는데...생각을 좀만 더 하자
// let file3 = fileName.slice(fileName.lastIndexOf('.')+1);

// 중복되는 코드는 변수에 담아서 깔끔한 코드를 만들자!
// let num1 = fileName.indexOf('.');
// let num2 = fileName.lastIndexOf('.');

// let file1 = fileName.slice(0, num1);
// let file2 = fileName.slice(num1 + 1, num2);
// let file3 = fileName.slice(num2 + 1);

// console.log(file1);
// console.log(file2);
// console.log(file3);

// const first_dot = fileName.indexOf('.');
// const last_dot = fileName.lastIndexOf('.');
// const first_str = fileName.slice(0, first_dot);
// const middle_str = fileName.slice(first_dot + 1, last_dot);
// const last_str = fileName.slice(last_dot + 1 );

// console.log( first_str );
// console.log( middle_str );
// console.log( last_str );

// let splt = fileName.split('.');
// splt.forEach(function (i) {
//     console.log(i);
// });

// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새로운 배열을 반환.
let arrCon1 = [1, 2, 3];
let arrCon2 = [10, 20, 30];
let arrCon4 = [100, 200, 300];
let arrCon3 = arrCon1.concat( arrCon2, arrCon4 ); // 가변 파라미터로 배열 여러개 넣을 수 있다.
// console.log( arrCon3 );

// includes() 메소드 : 배열이 특정 요소를 가지고 있는지 판별. true, false 반환
let arrInc = [1, 2, 3, 4];
// console.log( arrInc.includes( 7 ) );

// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환.
const arrSort = [ 6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40 ];
// arrSort.sort(); // [100, 3, 3, 40, 5, 5, 6, 7, 8, 80, 92] -> 문자열로 인식하기 때문에 앞글자 기준으로 정렬.
arrSort.sort( ( a, b ) => a - b ); // 오름차순 정렬
// arrSort.sort( 
//     function ( a, b ) { 
//         return a - b; 
//     } 
// ); // 위와 같음

arrSort.sort( ( a, b ) => b - a ); // 내림차순 정렬
// arrSort.sort( 
//     function ( a, b ) { 
//         return b - a; 
//     }
// ); // 위와 같음

// join() 메소드 : 배열의 모든 요소를 어떠한 문자로 연결해서 하나의 문자열로 만들어준다.
const arrJoin = ["안녕", "하세", "요"];
arrJoin.join(); // '안녕,하세,요' - defalt 값이 ','
arrJoin.join(''); // '안녕하세요' - 빈 문자열을 입력하면 그대로 연결.
arrJoin.join('/'); // '안녕/하세/요'

// every() 메소드 : 배열의 '모든(every)'요소들이 주어진 주어진 판별 함수를 통과하는지 테스트.(&& AND 와 비슷?)
const arrEvery = [1, 2, 3, 4, 5];
let result = 
    arrEvery.every( function( val ) {
                        return val <= 5; // 배열 안의 '모든(every)'요소들이 5보다 작거나 같기 때문에 true.
                    }); // 하나의 요소라도 판별 함수를 통과하지 못 하면 false.
// console.log( result );

// 모든 요소의 2로 나눈 나머지가 0인지 판별해주세요.
let result_div = arrEvery.every( ( val ) => val % 2 === 0 );
// result_div =
//             arrEvery.every(
//                 function ( val ) {
//                     return val % 2 === 0;
//                 }
//             ); 위와 같음!
// console.log( result_div );

// some() 메소드 : 배열의 '어떤(some)'요소라도 주어진 주어진 판별 함수를 통과하는지 테스트. ( || OR 와 비슷?)
const arrSome = [1, 2, 3, 4, 5];
let result2 = arrSome.some( val => val >= 5 ); // 하나라도 통과하면 true 반환.
// console.log( result2 );

// filter() 메소드 : 판별 함수를 통과(true)하는 모든 요소를 모아서 새로운 배열로 반환.

const arrFilter = [1, 2, 3, 4, 5];
let result3 = arrFilter.filter( val => val >= 3 );
console.log( result3 ); // [3, 4, 5] 반환.