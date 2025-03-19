<template>
    <div class="hello">
      <h1> {{ msg }}</h1>
      <ul>
        <li v-if="loading"> {{ msg2 }} </li>
        <li v-if="distance !== null && loading == false">Resultado: {{ distance }}</li>
        <li v-if="error">{{ error }}</li>
      </ul>
    </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String,
    msg2: String,
    distance: [Number, String],
    loading: Boolean,
    error: String
  }
}
</script>

<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
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
