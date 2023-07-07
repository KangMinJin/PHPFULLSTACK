<template>
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
        <button class="exit" @click="$emit('closeModal')">X</button>
        <img :src="products[productNum].img" :alt="products[productNum].name">
        <h4>{{ products[productNum].name }}</h4>
        <p>{{ products[productNum].content }}</p>
        <p>{{ products[productNum].price*products[productNum].count }}</p>
        <button type="button" @click="$emit('plusCnt')">+</button>
        <span>{{ products[productNum].count }}</span>
        <button type="button" @click="$emit('minusCnt')">-</button>
        </div>
    </div>
</template>
<script>
export default {
    name:'Modal',
    props:{
        modalFlg:Boolean,
        productNum:Number,
        products:Object,
    }
}
</script>
<style>
    
</style>