<template>
  <div id="app">
    <img class="img_nucleotide" alt="Vue logo" src="./assets/nucleotide.png">
    <HelloWorld msg="Nucleotide Count"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  },
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
.img_nucleotide{
  height: 300px;
  width: auto;
}

</style>
