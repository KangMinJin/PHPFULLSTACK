<template>
    <img alt="Vue logo" src="./assets/logo.png">
    <h1>App.vue</h1>
    <hr>
    <PostComponent :propsTest = "1"></PostComponent>
    <hr>
    <button @click="data2.name = '김김김'">김김김</button>
    <p>{{ data2.name }}</p>
    <button @click="data.name = '김김김'">김김김</button>
    <p>{{ data.name }}</p>
    <button @click="test = 'test'">test</button>
    <p>{{ test }}</p>

    <!-- <router-link to="/">홈으로</router-link>
    <br>
    <router-link to="/post">post로</router-link>
    <router-view :test="222"></router-view> -->
    <!-- <ContainerComponent v-if="flg"></ContainerComponent>
    <PostComponent v-if="!flg"></PostComponent>
    <button @click="flg = !flg">flg</button> -->
</template>

<script>
// ? router 사용하면 import할 필요 없음.
// import ContainerComponent from './components/ContainerComponent.vue';
import PostComponent from './components/PostComponent.vue';
import { ref, reactive } from 'vue';

export default {
    name: 'App',
    setup() { // 컴포지션api는 created아니고 setup사용(created와 같은 단계에서 실행된다)
        let data = ref({
            name: '홍길동',
            age: 20,
        }); // ref안에 data를 사용하면 실시간으로 렌더링된다.

        let data2 = reactive({ // array나 object만 데이터바인딩 된다 -> 그래서 잘 안 씀
            name: '철수',
            age: 5,
        });
        
        let test = 'bbb'; // 실시간 렌더링 불가능

        return { test, data, data2 };// 컴포지션api는 무조건 return이 있어야한다.
    },
    // data() {
    //     return{
    //         flg: true,
    //     }
    // },
    components: {
        // ContainerComponent,
        PostComponent,
    }
}
</script>

<style>
    #app {
        font-family: Avenir, Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
</style>
