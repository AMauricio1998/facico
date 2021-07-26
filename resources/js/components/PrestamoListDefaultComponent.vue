

<template>
    <div>
        <div class="card mt-3 mb-3" style="width: 40rem; border-radius: 15px; " v-for="prestamo in prestamos" v-bind:key="prestamo.nombre" >
            <img v-bind:src="  '/images/' + prestamo.image" class="card-img-top" style="border-radius: 15px; background-color: #2d5135">
            
            <div class="card-body" style="border-radius: 15px;">
              <h5 class="card-title">Prestamo hecho a: {{ prestamo.nombre }}  {{ prestamo.apellidos }}</h5>
              <p class="card-text">Licenciatura: {{ prestamo.licenciatura }}</p>
              <p class="card-text">Num. cuenta: {{ prestamo.num_cuenta }}</p>
              <p class="card-text">Insumo prestado: {{ prestamo.insumo }}</p>
              <button  class="btn btn-primary" v-on:click="prestamoClick(prestamo)">Ver resumen</button>
              <router-link  class="btn btn-success" :to=" { name: 'detail', params: {id: prestamo.id} } ">Ver</router-link>
            </div>
        </div>
            <modal-prestamo :prestamo="prestamoSelected"></modal-prestamo>
             
              <v-pagination v-model="currentPage" 
                    class="mt-3"
                    :page-count="total"
                    :classes="bootstrapPaginationClasses"
                    :labels="paginationAnchorTexts">
              </v-pagination>

    </div>
</template>
<script>
import vPagination from 'vue-plain-pagination';
export default {
    props:["prestamos", "total", "pCurrentPage"],
    created(){
        this.currentPage = this.pCurrentPage;
},
    methods: {
        prestamoClick: function(p){
            this.prestamoSelected = p;
        },
    },
     data: function () {
      return {
          prestamoSelected: "",
          currentPage: 1,
          bootstrapPaginationClasses: {
            ul: 'pagination',
            li: 'page-item',
            liActive: 'active',
            liDisable: 'disabled',
            button: 'page-link'  
      },
         paginationAnchorTexts: {
           first: '',
           prev: '&laquo;',
           next: '&raquo;',
           last: ''
      }
      }
    },
    components: { vPagination },
    watch: {
        currentPage: function(newVal, oldVal){
            this.$emit('getCurrentPage', newVal)
        }
    }
};
</script>
