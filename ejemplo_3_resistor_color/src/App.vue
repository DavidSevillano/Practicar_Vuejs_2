<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/Resistor_color.png">
    <HelloWorld msg="Resistor Color" :number="number" @update-number="updateNumber"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  },
  data(){
    return{
      number: 0
    }
  },
  methods: {
    updateNumber(newNumber) {
      this.number = newNumber;
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
