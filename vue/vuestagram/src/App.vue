<template>
    <!-- 헤더 -->
    <div class="header">
        <ul>
            <li class="header-button header-button-left" v-if="$store.state.tabFlg != 0" @click="$store.commit('changeTabFlg', 0);$store.commit('clearState')">
                취소
            </li>
            <li>
                <a href="http://localhost:8080/"><img class="logo" alt="Vue logo" src="./assets/insta.png"></a>
            </li>
            <li class="header-button header-button-right" v-if="$store.state.tabFlg == 1" @click="$store.commit('changeTabFlg', 2)">
                다음
            </li>
        </ul>
    </div>
    
    <!-- 컨텐츠 -->
    <ConteinerComponent></ConteinerComponent>

    <button v-if="$store.state.addBtnFlg && $store.state.tabFlg == 0" @click="$store.dispatch('getMoreList');">더보기</button>
    <!-- ?action은 dispatch, mutation은 commit으로 사용한다! -->
    <!-- 푸터 -->
    <div class="footer">
        <div class="footer-button-store">
            <label for="file" class="label-store">+</label>
            <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
        </div>
    </div>
</template>

<script>
    import ConteinerComponent from './components/ConteinerComponent.vue';
    export default {
        name: 'App',
        created() {
            this.$store.dispatch('getMainList');
        },
        methods:{
            updateImg(e) { //이벤트가 발생했을 때의 데이터가 e에 담긴다.
                let file = e.target.files; // 이벤트가 발생했을 때 저장된 파일 가져옴
                // console.log(e.target);
                // console.log(e.target.value);
                let imgUrl = URL.createObjectURL(file[0]); // 브라우저에 이미지를 임시 저장
                this.$store.commit('changeImgUrl', imgUrl);
                this.$store.commit('changeTabFlg', 1)
                e.target.value = '';
            },
        },
        components: {
            ConteinerComponent,
        },
    }
</script>

<style>
    @import url('./css/app.css');
    #app {
        font-family: Avenir, Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
</style>
