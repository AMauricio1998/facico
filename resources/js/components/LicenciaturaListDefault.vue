<template>

    <div class="row" style="background-color: transparent;">
      <div class="col-md-3" v-for="licenciatura in licenciaturas"  :key="licenciatura.id" style="background-color: transparent;">
        <div class="card mt-3" style="background-color: #f0ffff; border-radius: 15px;">
        <router-link 
        :to="{ name: 'prestamo-licenciatura', params: {licenciatura_id: licenciatura.id} }"> 
                <!-- concatenar archivos estaticos -->
                <img src='/images_licenciatura/simbolo-de-psicologia.svg' class="card-img-top mt-3" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center" style="background-color:  #f0ffff ; border-radius: 15px;">{{ licenciatura.nombre }}</h5>
                </div>
          </router-link>
              </div>
        </div>
    </div>

</template>

<script>
export default {
    created(){
      this.getLicenciaturas();
    },
    methods: {
        getLicenciaturas: function(){
            fetch("/api/licenciatura/all")
            .then(response => response.json())
            .then(json => (this.licenciaturas = json.data));
        },
    },

    data: function () {
      return {
        licenciaturas: ""
    };
  }
};
</script>