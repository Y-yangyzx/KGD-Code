<template>
    <div class="categoryBox">
        <h3>{{title}}分类</h3>
        <slot :games="games">如果没有传递具体结构的时候，我会出现1</slot>
        <!-- <slot name="footer">如果没有传递具体结构的时候，我会出现2</slot> -->
    </div>
</template>

<script>
export default {
    name:'Category',
    props:['title'],
    data() {
        return {
             games:['穿越火线','劲舞团','红色警戒','超级玛丽']
        }
    },
}
</script>

<style scoped>
.categoryBox{
    background-color: burlywood;
    width: 200px;
    height: 200px;
}
h3{
    text-align: center;
    background-color: orange;
}
img{
    width: 100%;
    height: 100px;
}
</style>