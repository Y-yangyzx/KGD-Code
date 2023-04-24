<template>
  <div class="app">
    <h1>{{msg}}</h1>
    <!-- 第一个参数是传递数据要接收的名 第二个参数是对应的data中的数据 -->
    <Dog :mesFs="mesFs" :recieveDog="recieveDog" />
    <!-- 使用@绑定事件 -->
    <!-- <Cat @atguigu="atguigu"/> -->
    <Cat ref="cat"/>
    <button @click="btnClick">点我把App名传递给LittleDog</button>
  </div>
</template>

<script>
import Dog from './components/Dog.vue'
import Cat from "./components/Cat.vue";

export default {
  name: 'App',
  data() {
    return {
      msg:'你好啊',
      mesFs:'父传子的数据',
      AppName:'App'
    }
  },
  components: {
    Dog,
    Cat
  },
  methods: {
    recieveDog(mes){
      console.log(mes);
    },
    atguigu(mes){
      alert(mes);
    },
    btnClick(){
      // 第二个是传递的参数
      this.$bus.$emit('hello',this.AppName)
    }
  },
  mounted() {
    // 找到Cat组件实例对象绑定atguigu事件   绑定哪个事件，对应那个方法
    // 灵活性强
    this.$refs.cat.$on('atguigu',this.atguigu)
  },
}
</script>

<style>
  .app{
    background-color:gray;
    padding: 5px;
  }
</style>
