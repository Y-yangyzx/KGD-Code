<!-- 只有这个页面的内容可以显示出来 -->
<template>
  <div id="app">
    <!-- <router-link to="/home" tag="button">首页</router-link> -->
    <!-- <router-link to="/about" tag="button">关于</router-link> -->
    <!-- <router-view></router-view> -->
  <!-- <button @click="homeClick">首页</button>
        <button @click="aboutClick">关于</button> -->

    <router-link to="/home" tag="button">首页</router-link>
    <router-link to="/about" tag="button">关于</router-link>
    <!-- 动态绑定标签自带属性  动态路由 -->
    <router-link :to="'/user/' + userId" tag="button">用户</router-link>
    <!-- <router-link to="/profile" tag="button">档案</router-link> -->
    <!-- 想要传递一些参数 需要对象格式 对象可以穿入多个不同的值 -->
    <router-link :to="{path:'/profile',query:{
      name:'zxy',age:18,height:1.70
    }}" tag="button">档案</router-link>

    <router-view></router-view>
  </div>
</template>

<script>
import router from './router';

export default {
  name: "App",
  data() {
    return {
      //根据不同的用户动态给定地址
      userId: 'lisi'
    }
  },
  components: { router },
  methods: {
    homeClick() {
      this.$router.push('/home');
      console.log("homeClick");
    },
    aboutClick() {
      this.$router.push('/about');
      console.log("aboutClick");
    }
  }
}
</script>

<style>
.router-link-exact-active {
  color: orange;
}
</style>
