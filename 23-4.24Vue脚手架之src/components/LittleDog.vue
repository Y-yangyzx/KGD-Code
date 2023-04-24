<template>
  <div class="lidog">
    <p>我是狗组件的子组件的提示信息：{{msg}}</p>
  </div>
</template>

<script>
export default {
    name:'LittleDog',
    data() {
        return {
            msg:'我是狗组件的子组件'
        }
    },
    comments:{

    },
    mounted() {
        this.$bus.$on('hello',(data)=>{
            alert('收到了App的名字：'+data);
        })
    },
}
</script>

<style scoped>
.lidog{
  background-color: coral;   
}
</style>