<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <!-- Formulario para capturar los colores -->
    <form @submit.prevent="submitForm">
      First Color <input type="text" v-model="firstColor" name="firstColor" />
      Second Color <input type="text" v-model="secondColor" name="secondColor" />
      <input type="submit" value="Submit" />
    </form>
    <p>El número correspondiente es: {{ number }}</p>
  </div>
</template>

<script>

export default {
  name: 'HelloWorld',
  props: {
    msg: String,
    number: { 
      type: Number,
      required: true
    }
    },
  data() {
    return {
      firstColor: '',
      secondColor: '',
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await fetch('http://localhost:3000/backend/resistor_color.php', {
          method: 'POST',
          body: new URLSearchParams({
            firstColor: this.firstColor,
            secondColor: this.secondColor,
          }),
        });
        const data = await response.json();

        this.$emit('update-number', data.number);

      } catch (error) {
        console.error('Error al enviar los datos:', error);
      }
    },
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
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
