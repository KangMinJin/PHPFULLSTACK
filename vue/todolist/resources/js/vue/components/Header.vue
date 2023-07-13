<template>
    <div class="header">
        <h1>TO-DO-LIST</h1>
        <div class="inputCon">
            <input type="text" name="content" class="content" id="content" placeholder="할 일을 적어주세요">
            <button class="contentBtn" @click="this.$parent.postList()">등록</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Header',
    // data(){
    //     return{
    //         content: '',
    //     }
    // },
    // methods:{
    //     // 리스트 작성
    //     postList(){
    //         let content = document.getElementById('content');
    //         this.content = content.value;

    //         const data = {

    //                 content: this.content

    //         };

    //         const header = {
    //             headers: {
    //                 'Content-Type' : 'multipart/form-data'
    //             }
    //         };

    //         axios.post('http://127.0.0.1:8000/api/items', data, header)
    //         .then(res =>{
    //             // this.boardData = res.data;
    //             console.log(res);
    //         })
    //         .catch(err =>{
    //             console.log(err);
    //             console.log(this.content);
    //         })
    //     }
    // },
}
</script>
<style>
    
</style>