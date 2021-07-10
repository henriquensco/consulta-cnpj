<template>
  <div class="home">
    <div>
      <h2>Pesquisar CNPJ</h2>
      <div>
        <input v-model="cnpj" type="text"><button>Pesquisar</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home',
  data() {
    return {
      cnpj: ""
    }
  },
  methods: {
    requestApi: function() {
      
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
