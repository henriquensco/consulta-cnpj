<template>
  <div class="home">
    <div>
      <h2>Pesquisar CNPJ</h2>
      <div>
        <input v-model="cnpj" type="text"><button @click="requestApi">Pesquisar</button>
      </div>
      <div v-if="aviso" id="aviso">
        CNPJ Incorreto
      </div>
      {{resultado}}
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'Home',
  data() {
    return {
      cnpj: "",
      resultado: [],
      aviso: null
    }
  },
  methods: {
    requestApi: function() {
      if(this.cnpj == "" || this.cnpj.length < 14 || this.cnpj.length > 14) {
        this.aviso = true;
      } else {
        axios.get("http://localhost:8000/api/"+this.cnpj)
        .then((res)=>{
          this.resultado.push(res);
        });
        this.aviso = null;
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#aviso {
  background-color: #ff8585;
  width: 40%;
  margin: 0 auto;
  margin-top: 5%;
  padding: 5px 5px;
  border-color:#000;
  border-radius: 3px;
}
</style>
