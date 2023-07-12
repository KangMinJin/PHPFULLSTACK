<template>
    <!-- {{ $store.state.boardData }} -->
    <div class="post" v-for="item in $store.state.boardData" :key="item">
        <div class="post-img" :class="item.filter" :style="{ backgroundImage : `url('${item.img}')`}"></div>
        <div class="post-content">
            <p>좋아요 {{ item.likes }}</p>
            <p><strong>{{ item.name }}</strong> {{ item.content }}</p>
            <p>{{ item.created_at }}</p>
        </div>
    </div>
    <!-- <div class="post">
        <div class="post-img"></div>
        <div class="post-content">
            <p>0 좋아요</p>
            <p><strong>닉네임</strong> 내용내용</p>
            <p>2023-07-11</p>
        </div>
    </div> -->
</template>
<script>
export default {
    name: 'PostComponent',
}
</script>
<style>
    /* .post-img {
        background-image: url();
    } */
</style>