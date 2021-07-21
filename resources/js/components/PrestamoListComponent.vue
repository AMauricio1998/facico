

<template>
    <div>
        

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
            fetch('/api/prestamo?page='+this.currentPage)
            .then(response => response.json())
            .then(json =>  {
                this.prestamos = json.data.data;
                this.total = json.data.last_page;
                // console.log("getPrestamo " +this.total)
            });
        },
        getCurrentPage: function(val){
            if(val != this.currentPage){
            this.currentPage = val
            this.getPrestamos();
         }
        }
    },
     data: function () {
      return {
          prestamoSelected: "",
        prestamos:[],
        total: 0,
        currentPage: 1,
      }
    },
}
</script>
