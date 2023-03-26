<template>
    <div>
        <h2>我是用户界面</h2>
        <p>用户相关信息哈哈哈哈哈哈哈哈哈哈哈哈哈</p>
        <p>{{userId}}</p>
    </div>
</template>

<script>
export default {
  name: 'User',
  computed:{
    userId(){
        //获取动态给用户的地址     拿到用户传过来的id
        return this.$route.params.userid;
        //userid是在路由的index.js中配置的path后的名字（可改）
    }
  }
}
</script>

<style>

</style>