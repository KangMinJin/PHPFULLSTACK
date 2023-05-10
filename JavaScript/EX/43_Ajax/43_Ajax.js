// https://picsum.photos

// fetch
const url = "https://picsum.photos/v2/list?page=14&limit=5";

const btn1 = document.querySelector('#btn1');
const fm = document.querySelector('#fm');
const inp = document.querySelector('#inp');
const imgs = document.querySelectorAll('.imgs');
const btn2 = document.querySelector('#btn2');
const con = document.querySelector('.con');
// let msg = inp.value;
const h1 = document.querySelector('#h1');
// fm.addEventListener('submit', function (e) {
//     e.preventDefault();
//     // const msg = inp.value;
//     // // console.log(msg);
//     if (inp.value) {
//             fetch(inp.value)
//             .then(res => {return res.json()})
//             .then(data => makeList(data))
//             .catch(console.log);
//         }
//     })
let submitFlg = false;
btn1.addEventListener('click', () => {
    if (submitFlg === false) {
        const urlImg = inp.value;
        fetch(urlImg)
        .then(res => {return res.json()})
        .then(data => makeList(data))
        .catch(console.log);
        submitFlg = true;
    }
    })

function makeList(data) {
    // con.replaceChildren();
    con.textContent = '';
    data.forEach(item => {
            const tagImg = document.createElement('img');           
            tagImg.setAttribute('src',item.download_url);
            tagImg.classList.add('imgs');
            con.appendChild(tagImg);
        // const tagImg = document.createElement('img');
        // tagImg.setAttribute('src',item.download_url);
        // tagImg.classList.add('imgs');
        // document.body.insertBefore(tagImg,fm);
    });
}
btn2.addEventListener('click', function(){
    con.textContent = '';
    submitFlg = false;
})