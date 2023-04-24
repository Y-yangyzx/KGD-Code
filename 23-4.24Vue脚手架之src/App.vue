<template>
  <div class="app">
    <Count/>
  </div>
</template>

<script>
import Count from "./components/Count.vue";

export default {
  name: 'App',
  data() {
    return {
      
    }
  },
  components: {
    Count
  },
}
</script>

<style>
  .app{
    background-color:gray;
    padding: 5px;
  }
</style>
