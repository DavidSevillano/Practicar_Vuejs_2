<template>
  <div id="app">
    <img class="imgProverb" alt="Vue logo" src="./assets/proverb.png">
    <HelloWorld msg="Proverv:" :provervs="provervs"/>
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
      provervs: []
    };
  },
  mounted(){
    this.fetchProvervs();
  },
  methods:{
    async fetchProvervs(){
      try{ 
        const response = await fetch('http://localhost:3000/backend/proverv.php');
        const data = await response.json();
        this.provervs = data
      }catch(er){
        console.error(er);
      }
    }
  }

}


</script>

<style>

html,body{
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
.imgProverb{
  height: 300px;
  width: auto;
}

</style>
