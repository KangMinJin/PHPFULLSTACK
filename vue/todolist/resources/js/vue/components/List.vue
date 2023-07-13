<template>
    <div class="list">
        <div class="listCon">
            <div v-for="item in boardData" :key="item">
                <input type="checkbox" name="completed" id="completed" @click="updateList(item.id, item.completed)" v-model="item.completed">
                <span class="listContent">{{ item.content }}</span>
                <button type="button" @click="this.$parent.deleteList(item.id)">삭제</button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'List',
    props:{
        boardData : Array,
    },
    methods:{
        // 리스트 수정
        updateList(id, completed){
            // let completed = document.getElementById('completed').value
            
            const data ={
                "item":{
                    // "completed": completed == false ? true : false
                    "completed": completed ? 0 : 1,
                }
            };

            const header = {
                headers: {
                    'Content-Type' : 'application/json'
                }
            };
            axios.put('/api/items/'+id, data, header)
            .then(res =>{
                console.log(res);
                console.log(this.completed);
            })
            .catch(err=>{
                console.log(err);
            })
        },
    }
}
</script>
<style>
    
</style>