<template>
    <div>
        <h2>我是首页</h2>
        <p>哈哈哈哈哈哈哈哈哈哈哈哈哈</p>

        <router-link to="/home/news">新闻</router-link>
        <router-link to="/home/message">消息</router-link>

        <router-view></router-view>
    </div>
</template>

<script>
import router from '../router';

export default {
    name: "Home",
    components: { router }
}
</script>

<style>

</style>