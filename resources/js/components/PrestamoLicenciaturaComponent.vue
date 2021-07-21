



<template>
    <div>
            <a class="btn  btn-primary"><h4>{{ licenciatura.nombre }}</h4></a>

    <prestamo-list-default 
            :key="currentPage"
            @getCurrentPage = "getCurrentPage"
            v-if="total > 0" 
            :prestamos="prestamos" 
            :pCurrentPage ="currentPage"
            :total="total"
            >
        </prestamo-list-default>
             
            
    </div>
</template>

<script>
export default {
    created(){
        this.getPrestamos();
    },
    methods: {
        prestamoClick: function(p){
            this.prestamoSelected = p;
        },
        getPrestamos(){
            fetch('/api/prestamo/'+this.$route.params.licenciatura_id+'/licenciatura?page='+this.currentPage)
            .then(response => response.json())
            .then(json =>  {
                this.prestamos = json.data.prestamos.data;
                this.total = json.data.prestamos.last_page;
                this.licenciatura = json.data.licenciatura;
                });
        },
        getCurrentPage: function(val){
            this.currentPage = val
            this.getPrestamos();
        },
    },
     data: function () {
      return {
          prestamoSelected: "",
        prestamos:[],
        total: 0,
        licenciatura: "",
        currentPage: 1,
      }
    },
}
</script>
