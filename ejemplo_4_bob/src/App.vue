<template>
  <div id="app">
    <img class="bot_img" alt="Vue logo" src="./assets/bot.png">
    <HelloWorld msg="Bob, your personal robot"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}
</script>

<style>
html{
  background-color: #f3f3f3;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.bot_img{
  height: 300px;
  width: auto;
}

</style>
