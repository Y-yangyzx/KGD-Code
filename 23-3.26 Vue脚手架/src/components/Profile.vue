<template>
    <div>
        <h2>档案</h2>
        <p>传递一些参数</p>
        
        <!-- 将这几个参数显示出来 -->
        <p>{{$route.query.name}}</p>
        <p>{{$route.query.age}}</p>
        <p>{{$route.query.height}}</p>
    </div>
</template>

<script>
export default {
  name: 'Profile'
}
</script>

<style>

</style>