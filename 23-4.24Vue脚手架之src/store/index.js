// 改文件用于配置Vuex中最为核心的store

// 引入Vue
import Vue from "vue";
// 引入Vuex
import Vuex from "vuex";
// 使用插件
Vue.use(Vuex)

// 三个对象
// 准备actions--用于响应组件中的动作 业务逻辑
const actions = {
    // context---miniStore
    jia(context,value){
        context.commit('JIA',value)
    }
}
// 准备mutations--用于操作数据（state）
const mutations = {
    JIA(state,value){
        console.log(state);
        state.sum += value
    }
}
// 准备state--用于存储数据
const state = {
    sum:0
}

// 创建并暴露store
export default new Vuex.Store({
    actions,
    mutations,
    state
})