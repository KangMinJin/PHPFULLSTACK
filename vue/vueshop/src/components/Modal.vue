<template>
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
        <button class="exit" @click="$emit('closeModal'); inpCnt = 1;">X</button>
        <img :src="products[productNum].img" :alt="products[productNum].name">
        <h4>{{ products[productNum].name }}</h4>
        <p>{{ products[productNum].content }}</p>
        <!-- <p>{{ products[productNum].price*products[productNum].count }}</p> -->
        <p>{{ products[productNum].price*inpCnt }}</p>
        <!-- <p>{{ products[productNum].count }}</p> -->
        <!-- <button type="button" @click="$emit('plus')">+</button>
        <span>{{ products[productNum].count }}</span>
        <button type="button" @click="$emit('minus')">-</button> -->
        <input type="test" v-model="inpCnt">
        <!-- <input type="number" @input="$emit('modifyInpCnt', $event)"> -->
        <!-- <input type="text" v-model="inpCnt"> -->
        </div>
    </div>
</template>
<script>
export default {
    name:'Modal',
    data() {
        return {
            inpCnt: 1,
        }
    },
    props:{
        modalFlg:Boolean,
        productNum:Number,
        products:Array,
        // inpCnt:Number,
    },
    watch:{
        inpCnt(inp) {
            if (inp < 1) {
                alert('최소 수량은 1개입니다.');
                this.inpCnt = 1;
            } else if (inp > 10) {
                alert('최대 수량은 10개까지입니다.');
                this.inpCnt = 10;
            }
        },
    }
}
</script>
<style>
    
</style>