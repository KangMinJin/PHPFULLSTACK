<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
  <!-- <img alt="Dolphin" src="./assets/dolphin.png"> -->
  <img alt="Dolphin" src="./assets/dolphin.jpg" class="icon" @mouseover="secret=true" @mouseout="secret=false">
  <div class="sMsg" v-if="secret">절대 바이러스 아닙니다.<br>믿어 주세요... 전 돌고래입니다</div>
  <!-- 네비
  <div class="nav">
    <a href="">HOME</a>
    <a href="">PRODUCTS</a>
    <a href="">EX</a>
  </div> -->
  <Navi :navList="navList"/> <!-- 컴포넌트 사용 -->
  <!-- 부모의 데이터를 자식으로 넘기기 -->

  <!-- 모달 -->
  <Modal :products="products" :productNum="productNum" @closeModal="modalFlg=false;" @plusCnt="plus(productNum)" @minusCnt="minus(productNum)" :modalFlg="modalFlg"/>
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
  <!-- <div class="bg_black" v-if="modalFlg" @click="modalFlg=false">
    <div class="bg_white" v-if="modalFlg" @click="modalFlg=false">
      <button class="exit" @click="modalFlg=false">X</button>
      <img :src="item.img" alt="">
      <h4>{{ item.name }}</h4>
      <span>{{ item.content }}</span>
      <span>{{ item.price }}</span>
    </div>
  </div> -->
  <!-- <div>
    <h4>{{ product1 }}</h4>
    <p>{{ price1 }}원</p>
  </div>
  <div>
    <h4>{{ product2 }}</h4>
    <p :style="styleR">{{ price2 }}원</p> style앞에 : 붙이면 vue문법을 사용하겠다는 뜻
  </div> -->
  <!-- v-for="(item, index) in items" :key="index" -->
  <!-- <div v-for="item in products" :key="item"> -->
  <!-- 상품리스트 -->
  <!-- <ProductList :products="products"/> -->
  <div class="wrap">
    <ProductList :product="product" @openModal="modalFlg=true, productNum=i;" :method="method" v-for="(product, i) in products" :key="i"/>
    <!-- <div v-for="(item, i) in products" :key="i" class="prod">
      {{ i }}
      <h4 v-for="name in products" :key="name">{{ name }}</h4>
      <h4 v-for="(name, i) in products" :key="i">{{ i }}</h4>
      <img :src="item.img" :alt="item.name" @click="openModal(i)">
      <h4 @click="openModal(i)">{{ item.name }}</h4>
      <p>{{ item.price }}원</p>
      <p>{{ item.count }}개</p>
      <button type="button" @click="item.count++">수량 증가</button>
      <button type="button" @click="plus(i)">수량 증가</button>
      v-on:click은 @click으로도 쓸 수 있다
      <button type="button" @click="minus(i)">수량 감소</button>
      재사용성을 생각하면 굳이 함수를 만들 필요가 없을듯
      <button type="button" @click="item.count--">수량 감소</button>
      <span>{{ item.count }}</span>
    </div> -->
  </div>
  <!-- if -->
  <!-- <p v-if="1 === 1">if문 테스트</p> -->
</template>

<script>
import data from './assets/js/data.js';

import Navi from './components/Navi.vue';
import ProductList from './components/ProductList.vue';
import Modal from './components/Modal.vue';

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      secret:false,
      navList:['HOME', 'PRODUCT', 'ETC'],
      products: data,
      modalFlg: false,
      productNum: 0,
      product1: '양말',
      price1: '3,800',
      product2: '폰케이스',
      price2: '24,000',
      styleR: 'color:red',// 데이터 바인딩은 데이터를 넣을때만 쓰는 것이 아니다!
    }
  },
  methods: { // 함수를 설정하는 영역
    plus(i){
      this.products[i].count++;
    },
    openModal(i){
      this.modalFlg = true;
      this.productNum = i; // products 레코드의 index를 받으면 굳이 for문을 추가로 돌릴 필요가 없다.
      // 모달창 이미 만들어놓고 띄우는건 비효율적 
    },
    // 재사용성을 생각하면 굳이 함수를 만들 필요가 없을듯
    minus(i){
      if (this.products[i].count > 1) {
        this.products[i].count--;
      }
    },
    closeModal(){
      this.modalFlg=false;
      // this.products[i].count=1;
    }
  },
  components:{ // 컴포넌트 정의
    // Navi: Navi,
    Navi, // 이름 똑같으면 생략 가능
    ProductList,
    Modal,
  }
}

</script>

<style>
@import url('./assets/css/app.css');
</style>
