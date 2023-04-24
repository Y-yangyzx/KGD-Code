<template>
    <div class="cat">
        <p>姓名：{{catName}}</p>
        <p>年龄：{{catAge}}</p>
       <button @click="btnClick">点击调用父组件中的方法</button>
       <button @click="btnJB">点解解绑上述按钮事件</button>
    </div>
</template>

<script>
export default {
    name:'Dog',
    data() {
        return {
            catName:'莱斯',
            catAge:2,
            mesC:'子给父传递的数据---Cat',
           
        }
    },
    components:{

    },
    props:['atguigu'],
    methods: {
       btnClick(){
        this.$emit('atguigu',this.mesC)
       },
       btnJB(){
        this.$off('atguigu')
       }
    },
    mounted() {
        this.$bus.$on('communication',(data)=>{
            console.log('我是猫组件，我收到了狗组件传递过来的数据：',data);
        })
    },
}
</script>

<style scoped>
.cat{
    background-color: bisque;
}
</style>