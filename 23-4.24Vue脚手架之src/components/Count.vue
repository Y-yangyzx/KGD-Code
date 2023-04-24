<template>
    <div>
        <h1>当前求和为：{{$store.state.sum}}</h1>
        <select v-model.number="n">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <button @click="add">+</button>
        <button @click="sub">-</button>
        <button @click="oddAdd">当前为奇数再加</button>
        <button @click="waitAdd">等一等再加</button>
    </div>
</template>

<script>
export default {
    name:'Count',
    data() {
        return {
            n:1,  //用户当前选择的数字
        }
    },
    methods: {
        add(){
            this.$store.dispatch('jia',this.n)
        },
        sub(){
            
        },
        oddAdd(){
            
        },
        waitAdd(){
            setTimeout(()=>{
                
            },1000)
        }
    }
}
</script>

<style>

</style>