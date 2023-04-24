<template>
  <div class="app">
    <!-- <Category title="美食">
      <img slot="center" src="https://img2.baidu.com/it/u=379536611,3615163544&fm=253&app=138&size=w931&n=0&f=JPEG&fmt=auto?sec=1682442000&t=7286690cf15e90e7a09dcf4faff5f606" alt="">
      <a slot="footer" href="http://www.atguigu.com">更多美食</a>
    </Category> -->

    <!-- <Category title="游戏">
      <ul>
        <li v-for="(game,index) in games" :key="index">{{game}}</li>
      </ul>
      <template slot="footer">
        <div>
          <a href="http://www.atguigu.com">更多美食</a>
          <a href="http://www.atguigu.com">网络游戏</a>
        </div>
        <h4>欢迎前来观影</h4>
      </template>
    </Category> -->


    <!-- 数据在另一个组件中 不在这个组件中 也不允许别的组件传过来 -->
    <Category title="游戏">
      <!-- 外侧必须要包裹一个template否则拿不到 属性scope -->
      <!-- <template scope="atguigu"> -->
      <template scope="atguigu">
        <ul>
          <li v-for="(game, index) in atguigu.games" :key="index">{{ game }}</li>
        </ul>
      </template>
    </Category>

     <Category title="游戏">
      <!-- 外侧必须要包裹一个template否则拿不到 属性scope -->
      <!-- <template scope="atguigu"> -->
        <!-- 解构赋值 -->
      <template scope="{games}">   
        <ol>
          <li v-for="(game, index) in games" :key="index">{{ game }}</li>
        </ol>
      </template>
    </Category>


     <Category title="游戏">
      <!-- 外侧必须要包裹一个template否则拿不到 属性scope -->
      <!-- <template scope="atguigu"> -->
      <template scope="atguigu">
        <h4>
          <li style="color:red;list-style:none" v-for="(game, index) in atguigu.games" :key="index">{{ game }}</li>
        </h4>
      </template>
    </Category>


    <!-- <Category title="电影"></Category> -->
  </div>
</template>

<script>
import Category from "./components/Category.vue";

export default {
  name: "App",
  // data() {
  //       return {
  //           foods:['火锅','烧烤','小龙虾','牛排'],
  //           games:['穿越火线','劲舞团','红色警戒','超级玛丽'],
  //           films:['《教父》','《拆弹专家》','《你好，李焕英》','《满江红》']
  //       }
  //   },
  components: {
    Category,
  },
};
</script>

<style>
.app {
  background-color: gray;
  padding: 5px;
  display: flex;
  justify-content: space-around;
}
</style>
