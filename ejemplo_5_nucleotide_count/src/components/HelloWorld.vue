<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <form @submit.prevent="submitForm" method="post" action="nucleotide_count.php">
      <input type="text" name="word" v-model="word">
      <input type="submit" name="submit">
    </form>
    <ul>
      <li v-for="(value, nucleotide) in nucleotides" :key="nucleotide">
        {{ nucleotide }}: {{ value }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data(){
    return{
      word: '',
      nucleotides: []
    }
  },
  props: {
    msg: String
  },
  methods: {
    async submitForm() {
    try {
      const response = await fetch("http://localhost:3000/backend/nucleotide_count.php", {
        method: 'POST',
        body: new URLSearchParams({
          word: this.word
        }),
      });
      const data = await response.json();

      this.nucleotides = data;

    } catch (er) {
      console.error('Error en la solicitud:', er);
      this.nucleotide = 'Hubo un problema al procesar los datos';
    }
  }
  }
}
</script>

<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
