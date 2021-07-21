

<template>

<div>
    <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content" >
          <div class="modal-header" style=" background-color: rgba(32, 178, 170, 0.452)">
            <h5 class="modal-title" id="exampleModalLabel">Prestamo hecho a {{ prestamo.nombre }} {{ prestamo.apellidos }}</h5><br>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body text-center" style="background-color: rgba(176, 196, 222, 0.452)">
          <p style="text-shadow: 7px 4px 5px rgba(47, 79, 79, 0.452)">
           Num. cuenta: {{ prestamo.num_cuenta }} 
          </p>
          <p style="text-shadow: 7px 4px 5px rgba(47, 79, 79, 0.452);">
           Email: {{ prestamo.email }}
          </p>
          <p style="text-shadow: 7px 4px 5px rgba(47, 79, 79, 0.452);">
           Insumo prestado: {{ prestamo.insumo }}
          </p>
          <p style="text-shadow: 7px 4px 5px rgba(47, 79, 79, 0.452);">
           Licenciatura: {{ prestamo.licenciatura }}
          </p>
          </div>
           <!-- <div class="modal-footer"> 
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
             <button type="button" class="btn btn-primary">Save changes</button> 
           </div>  -->
        </div>
      </div>
    </div>
</div>

</template>


<script>
export default {
    props: ["prestamo"],
    created() {
        //console.log("modal created");
        // setTimeout(function(){
        //     $("#post-modal").modal("show"); 
        // }, 4000);
    },
     watch:{
         prestamo: function(newVal, oldVal){
              $("#post-modal").modal("show");
         }
     }
 };
</script>