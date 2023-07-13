<template>
    <div>
        <Header></Header>
    </div>
    <div>
        <List :boardData = "boardData"></List>
    </div>
</template>
<script>
import Header from './components/Header.vue';
import List from './components/List.vue'
import axios from 'axios';
export default {
    name:'App',
    data(){
        return{
            boardData: [],
            content: '',
            completed: [],
        }
    },
    created(){
        this.getList();
    },
    methods:{
        // 리스트 불러오기
        getList(){
            axios.get('/api/items')
            .then(res =>{
                this.boardData = res.data;
                // console.log(this.boardData);
            })
            .catch(err =>{
                console.log(err);
            })
        },
        // 리스트 작성
        postList(){
            let content = document.getElementById('content');
            // this.content = content.value;

            const data = {
                "item":{
                    "content": content.value
                }
            };

            const header = {
                headers: {
                    'Content-Type' : 'application/json'
                }
            };

            axios.post('/api/items', data, header)
            .then(res =>{
                // this.boardData = res.data;
                console.log(res);
                content.value = '';
                this.boardData.unshift(res.data);
            })
            .catch(err =>{
                console.log(err);
                // console.log(content.value);
            })
        },
        // // 리스트 수정
        // updateList(id){
        //     // let completed = document.getElementById('completed').value
            
        //     const data ={
        //         "item":{
        //             // "completed": completed == false ? true : false
        //             "completed": completed ? false : true,
        //         }
        //     };

        //     const header = {
        //         headers: {
        //             'Content-Type' : 'application/json'
        //         }
        //     };
        //     axios.put('/api/items/'+id, data, header)
        //     .then(res =>{
        //         console.log(res);
        //         console.log(this.completed);
        //     })
        //     .catch(err=>{
        //         console.log(err);
        //     })
        // },
        // 리스트 삭제
        deleteList(id){
            axios.delete('/api/items/'+id)
            .then(res=>{
                console.log(res);
                this.getList();
            })
            .catch(err=>{
                console.log(err);
            })
        }
    },
    components:{
        Header,
        List,

    },
}
</script>
<style>

</style>