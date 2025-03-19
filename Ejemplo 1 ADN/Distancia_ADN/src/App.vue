<template>
  <div id="app">
    <img class="imgADN" alt="Vue logo" src="./assets/ADN_chain.png">
    <HelloWorld :msg="msg" :msg2="msg2" :distance="distance" :loading="loading" :error="error"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  },
  data() {
    return {
      msg: "Distancia de ADN",
      msg2: "Calculando...",
      distance: null,
      loading: true,
      error:' '
    };
  },
  mounted() {
     // Cuando el componente se monte, hacemos la petición para obtener la distancia
     this.fetchDistance();
  },
  methods: {
    async fetchDistance() {
      try {
        // Hacemos la petición usando fetch
        const response = await fetch('http://localhost:3000/backend/ADN.php');
        const data = await response.json();  // Parseamos la respuesta JSON
        this.distance = data.distance;  // Asignamos la distancia
        this.loading = false;  // Indicamos que la carga terminó
      } catch (er) {
        console.error('Error al obtener la distancia:', er);
        this.error = 'Error al obtener la distancia';
        this.loading = false;  // En caso de error, dejamos de mostrar el mensaje de espera
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
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.imgADN{
  width: 400px;  
  height: auto;   
  border-radius: 10px;
  mask-image: radial-gradient(circle, rgba(0, 0, 0, 1) 80%, rgba(0, 0, 0, 0) 100%);}
</style>
