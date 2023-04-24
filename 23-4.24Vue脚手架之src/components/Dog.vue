<template>
    <div class="dog">
        <p>姓名：{{dogName}}</p>
        <p>年龄：{{dogAge}}</p>
        <p>接收父组件传递过来的数据：{{mesFs}}</p>
        <button @click="btnClick">点击调用父组件中的方法</button>
        <!-- 实现兄弟组件之间的通信 触发事件按钮 全局事件总线的方式 -->
        <button @click="btnClickB">点我实现把狗狗的名字传给猫</button>
        <LittleDog />
    </div>
</template>

<script>
import LittleDog from './LittleDog.vue'
export default {
    name:'Dog',
    data() {
        return {
            dogName:'劳斯',
            dogAge:2,
            mesSf:'子给父传递的数据---Dog',
            mesCToD:'狗传数据给猫'
        }
    },
    components:{
        LittleDog
    },
    // 接收到的方法放到了vc身上 所有在这个组件中都能用
    props:['mesFs','recieveDog'],
    methods: {
        btnClick(){
            this.recieveDog(this.mesSf)
        },
        btnClickB(){
            this.$bus.$emit('communication',this.mesCToD)
        }
    },
}
</script>

<style scoped>
.dog{
    background-color: aquamarine;
    padding: 5px;
}
</style>