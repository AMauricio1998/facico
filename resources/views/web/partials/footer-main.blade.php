
<footer class="text-center  bg-dark" >
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-5">
        <!-- Facebook -->
          <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="http://www.facico-uaemex.mx/"
          role="button"
          data-mdb-ripple-color="white"
          > <img style="width: 40px; height: 40px;" src="{{ asset('images_licenciatura/014-facebook logo.svg') }} ">
          </a>
  
        <!-- Youtube -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.youtube.com/c/FacultaddeCienciasdelaConductaUAEM"
          role="button"
          data-mdb-ripple-color="dark"
          > <img style="width: 50px; height: 50px;" src="{{ asset('images_licenciatura/youtube.svg') }} ">
        </a>
  
        
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="bg-dark2 text-center text-white p-3" style="background-color: rgba(253, 246, 246, 0.2);">
      © {{  Date('Y') }} Copyright:
      <router-link class="text-white" to="/">FACICO</router-link>
      <router-link class="text-white"  :to="{ name: 'contact'}"><u>Contacto</u></router-link> 

    </div>
    <!-- Copyright -->
  </footer>



  