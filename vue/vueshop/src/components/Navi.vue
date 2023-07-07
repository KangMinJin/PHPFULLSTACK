<!-- vueinit으로 자동완성 -->
<template>
    <!-- 네비 -->
    <div class="nav">
    <a href="" v-for="item in navList" :key="item">{{ item }}</a>
    </div>
</template>

<script>
export default {
    name:'Navi',
    props:{ // 상속
        product1: String,
        navList: Array, // 받은 데이터의 형식을 적어준다.
    }
}
</script>

<style>
    
</style>