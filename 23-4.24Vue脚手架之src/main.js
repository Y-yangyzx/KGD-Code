import Vue from 'vue'
import App from './App.vue'

// 引入store  引入就会执行store/index.js 就会创建一个store实例了
// 在脚手架中：会把所以的import语句都汇总在最上方执行
import store from './store'

Vue.config.productionTip = false


new Vue({
  render: h => h(App),
  // 安装全局事件总线
  // 引入了Vuex插件之后才能在vue实例身上看见store这个属性
  // store:'hello',  假的！！！
  store,
  beforeCreate(){
    Vue.prototype.$bus = this
  },
  // mounted() {
  //   console.log(this);
  // },
}).$mount('#app')
