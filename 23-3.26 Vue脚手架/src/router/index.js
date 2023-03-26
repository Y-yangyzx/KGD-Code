//配置路由相关的信息
//导入
// import vueRouter from 'vue-router';
import Vue from 'vue';
import VueRouter from 'vue-router';
//导入两个组件
// import Home from '../components/Home';
// import About from '../components/About';
// import User from '../components/User';


//懒加载写法
const Home =()=>import('../components/Home');
const HomeNews = ()=>import('../components/HomeNews');
const HomeMessage = ()=>import('../components/HomeMessage');

const About =()=>import('../components/About');
const User =()=>import('../components/User');
const Profile = ()=>import('../components/Profile')


//1.安装插件的统一做法：通过Vue.use(插件)
Vue.use(VueRouter);
//2.创建VueRouter对象
 const routes = [
  //路由默认配置
  {
    path:'',
    //重定向 重新定义一个方向
    redirect:'/home'
  }
  ,
  {
    path:'/home',
    component:Home,
    children:[
      {
        path:'',
        redirect:'news'
      },
      {
        //子组件不要加/
        path:'news',
        component:HomeNews
      },
      {
        path:'message',
        component:HomeMessage
      }
    ]
  },
  {
    path:'/about',
    component:About
  },
  {
    path:'/user/:userid',
    component:User
  },
  {
    path:'/profile',
    component:Profile
  }
 ];
const router = new VueRouter({
  //配置路由和组件之间的应用关系  映射关系（路由和组件）
  routes,
  //模式改为html5的history模式  对应的是hash模式
  mode:'history'
});

//3.将router对象挂载到vue实例中   需要导出
export default router;








// import Vue from 'vue'
// import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'

// Vue.use(Router)

// export default new Router({
//   routes: [
//     {
//       path: '/',
//       name: 'HelloWorld',
//       component: HelloWorld
//     }
//   ]
// })
