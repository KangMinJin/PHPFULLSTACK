<template>
    <div>
        <h1>HomeComponent</h1>
        <!-- <button @click="$router.push('login')" v-if="!$store.state.isToken">로그인</button> -->
		<!-- <button @click="$store.dispatch('logout')" v-if="$store.state.isToken">로그아웃</button> -->
        <!-- <button @click="$store.state.isToken? $router.push('main') : $router.push('login')">로그인</button> -->
        <button @click="btn('login')">로그인</button>
		<!-- <button @click="$store.push('login')" v-if="!$store.state.isToken">메인</button> -->
		<!-- <button @click="$store.state.isToken? $router.push('main') : $router.push('login')">메인</button> -->
		<button @click="btn('main')">메인</button>
    </div>
</template>
<script>
import router from '../router.js';

export default {
    name: "HomeComponent",
    methods: {
        btn(path) {
            router.push(path);
        }
    },
}
</script>
<style>
    
</style>