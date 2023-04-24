<template>
  <div class="student">
    <p>学生姓名：{{ studentName }}</p>
    <p>学生年龄：{{ age }}</p>
    <button @click="dianji">点击实现消息订阅与发布</button>
  </div>
</template>

<script>
import pubsub from 'pubsub-js'
export default {
  name: "Student",
  data() {
    return {
      studentName: "张飒",
      age: 18,
      gender:'男'
    }
  },
  methods: {
    dianji(){
      // this.$bus.$emit('hello',this.studentName)
      // 发布消息
      pubsub.publish('hello',this.studentName)
    }
  },
};
</script>

<style scoped>
.student {
  background-color: bisque;
  padding: 5px;
}
</style>