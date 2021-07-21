

<template>
    <div>
    <div v-if="prestamo">
        <div class="card mt-3  mb-3" style="width: 40rem; border-radius: 15px; " >
            <div class="card-header" style="background-color: #e0ffff">
                <img v-bind:src="  '/images/' + prestamo.imagen.image" class="card-img-top" style="border-radius: 15px;">
            </div>
            <div class="card-body">
              <h5 class="card-title">Prestamo hecho a {{ prestamo.nombre }}  {{ prestamo.apellidos }}</h5>
              <p class="card-text">Email: {{ prestamo.email }}</p>
              <p class="card-text">Licenciatura: {{ prestamo.licenciatura.nombre }}</p>
              <p class="card-text">Num. cuenta: {{ prestamo.num_cuenta }}</p>
              <p class="card-text">Insumo prestado: {{ prestamo.insumo }}</p>
              <router-link  class="btn btn-success" :to=" { name: 'prestamo-licenciatura', params: {licenciatura_id: prestamo.licenciatura.id} } ">{{ prestamo.licenciatura.nombre }}</router-link>
            </div>
        </div>
            
    </div>
    <div v-else>
        <h1>El prestamo no existe</h1>
    </div>
    </div>
</template>

<script>
export default {
    created(){
        this.getPrestamo();
    },
    methods: {
         getPrestamo: function(){
            fetch('/api/prestamo/'+this.$route.params.id)
            .then(response => response.json())
            .then(json =>  this.prestamo = json.data);
        }
    },
     data: function () {
      return {
        prestamoSelected: "",
        prestamo:"",
      }
    },
}
</script>
