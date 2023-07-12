import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state () {
        return{
            boardData: [], // 게시글 데이터 저장
            lastId: '', // 가장 마지막에 로드된 게시물의 ID
            addBtnFlg: true, // 더보기 버튼 표시용 flg
            tabFlg: 0, // 탭 UI flg(0:메인, 1:필터, 2:작성)
            imgUrl: '',// 이미지 URL
            imgFile: null,
            filter:'', // 필터명
            content:'', // 글 내용
        }
    },
    mutations: { // 일반적인 자바스크립트 함수 정의
        // 초기 데이터 셋팅용
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length - 1].id)
        },
        // 더보기 데이터 셋팅용
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // 작성글 데이터 셋팅용
        addWriteData(state, data) {
            state.boardData.unshift(data);// ? unshift는 배열의 가장 첫번째 자리에 이 데이터를 넣는 것.
        },
        // lastId 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // 탭UI flg 변경
        changeTabFlg(state, num) {
            state.tabFlg = num;
        },
        // 이미지 URL변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
            // state.imgFile = imgFile;
        },
        // 업로드 이미지 변경
        changeimgFile(state, imgFile) {
            // state.imgUrl = imgUrl;
            state.imgFile = imgFile;
        },
        // 필터명 변경
        changeFilter(state, filter) {
            state.filter = filter;
        },
        // 초기화
        clearState(state) {
            state.filter = '';
            state.imgUrl = '';
            state.content = '';
            state.imgFile = null;
        },
        // 글 내용 변경
        // changeContent(state) {
        //     state.content = content.value;
        // },
    },
    actions: { // 비동기 처리, 시간이 많이 걸리는 것 들을 처리하는 것
        // 메인 게시글 습득
        getMainList(context) { // context는 store를 가리킨다
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                context.commit('createBoardData', res.data);
            })
            .catch( err => {
                console.log(err);
            })
        },
        // 게시글 추가 습득
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res =>{
                if (res.data) {
                    context.commit('addBoardData', res.data)
                } else {
                    context.state.addBtnFlg = false;
                    // alert('불러올 게시물이 없습니다.');
                }
            })
            .catch( err => {
                console.log(err);
            })
        },
        // 게시글 작성
        writeContent(context) {
            let content = document.getElementById('content'); // 실시간으로 계속 변수 바꾸는 것 보단 입력 다 하고 나서 변수 바꾸는게 더 효율은 좋음.
            context.state.content = content.value
            const data = {
                name: '강민진',
                filter: context.state.filter,
                img: context.state.imgFile,
                content: context.state.content
                // content: content.value
            };

            const header = {
                headers: {
                    'Content-Type' : 'multipart/form-data'
                }
            };

            axios.post('http://192.168.0.66/api/boards', data, header) // REST API에 따라 insert는 post
            .then(res=>{
                // res.status로 에러코드 확인해야함.
                // 에러 코드와 에러 메세지를 json으로 보내주어야한다!
                // console.log(res);
                // this.dispatch('getMainList'); // ! 서버에 주는 부하를 줄이기 위해서 다 불러오는것은 적절치 않음.
                // ? 작성된 게시글의 데이터만 불러오는 처리
                context.commit('addWriteData', res.data);// ? unshift는 배열의 가장 첫번째 자리에 이 데이터를 넣는 것.
                context.commit('changeTabFlg', 0);
                context.commit('clearState');
            })
            .catch( err => {
                console.log(err);
            })
            // console.log(context.state.imgFile);
        },
    },
})

export default store