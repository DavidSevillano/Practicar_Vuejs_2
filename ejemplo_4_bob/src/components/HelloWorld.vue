<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <form @submit.prevent="submitForm">
      Talk with Bob <input type="text" v-model="conversation" name="conversation"/>
      <input type="submit" name="Submit">
    </form>
    <p v-if="reply == ''">
      Tell Bob something
    </p>
    <p>
      {{ reply }}
    </p>

  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
  data(){
    return{
      conversation: '',
      reply: ''
    }
  },
  methods: {
    updateReply(newReply) {
      this.reply = newReply;
    },
    async submitForm(){
      try{
        const response = await fetch('http://localhost:3000/backend/bob.php', {
          method: 'POST',
          body: new URLSearchParams({
            conversation: this.conversation
          }),
        });
        const data = await response.json();
        this.reply = data;

      }catch (error) {
        console.error('Error al enviar los datos:', error);
      }
    }
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
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
