<template>
    <div class="school">
        <p>学校名称：{{schoolName}}</p>
        <p>学校地址：{{address}}</p>
    </div>
</template>

<script>
import pubsub from 'pubsub-js'
export default {
    name:'School',
    data() {
        return {
            schoolName:'尚硅谷',
            address:'北京'
        }
    },
    mounted() {
        // this.$bus.$on('hello',(data)=>{
        //     console.log('我是School组件，我收到了数据：',data);
        // })

        // 订阅消息 
        this.pubId = pubsub.subscribe('hello',function(msgName,data){
            // 这里this指向问题：使用的pubsub这个库  未定义
            console.log('接收订阅的消息的消息名和数据',msgName,data);
        })
    },
    beforeDestroy() {
        // this.$bus.$off('hello')
        // 也是销毁掉  把pubId放在Vue实例的身上都可以访问
        pubsub.unsubscribe(this.pubId)
    },
}
</script>

<style scoped>
    .school{
        background-color: darkcyan;
        padding: 5px;
        margin-top: 20px;
    }
</style>