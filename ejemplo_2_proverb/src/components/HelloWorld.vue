<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <ul>
      <li v-for="(proverv, index) in provervs" :key="index" v-html="proverv"></li> 
      
    </ul>
    </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String,
    provervs: []
  }
}
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
  margin: 0 10px;
  margin-bottom: 10px;
}
a {
  color: #42b983;
}
</style>
