<template>
    <!-- 모달 -->
    <!-- <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
        <button class="exit" @click="closeModal()">X</button>
        <img :src="products[productNum].img" :alt="products[productNum].name">
        <h4>{{ products[productNum].name }}</h4>
        <p>{{ products[productNum].content }}</p>
        <p>{{ products[productNum].price * products[productNum].count }}원</p>
        <button type="button" @click="plus(productNum)">+</button>
        <span>{{ products[productNum].count }}개</span>
        <button type="button" @click="minus(productNum)">-</button>
        </div>
    </div> -->
    <!-- 상품리스트 -->
        <div class="prod">
            <img :src="product.img" :alt="product.name" @click="$emit('openModal')">
            <h4 @click="$emit('openModal')">{{ product.name }}</h4>
            <p>{{ product.price }}원</p>
            <p>{{ product.count }}개</p>
        </div>
    <!-- <div class="wrap">
        <div v-for="(item, i) in products" :key="i" class="prod">
        <img :src="item.img" :alt="item.name" @click="openModal(i)">
        <h4 @click="openModal(i)">{{ item.name }}</h4>
        <p>{{ item.price }}원</p>
        <p>{{ item.count }}개</p>
        </div>
    </div> -->
</template>
<script>
export default {
    name:'ProductList',
    props:{
        // products: Object,
        product: Object,
    }
}
</script>
<style>
    
</style>