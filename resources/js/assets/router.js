

    window.Vue = require('vue');
import Vue from 'vue';
    import VueRouter from 'vue-router';
    import PrestamoList from "../components/PrestamoListComponent.vue";
    import PrestamoDetail from "../components/PrestamoDetailComponent.vue";
    import PrestamoLicenciatura from "../components/PrestamoLicenciaturaComponent.vue";
    import Contact from "../components/ContactComponent.vue";
    import PrestamoLicenciaturaList from "../components/LicenciaturaListDefault.vue";

    
   Vue.use(VueRouter);

      export default new VueRouter({
          mode: 'history',
        routes: [
            { path: '/', component: PrestamoList, name: "list" },
            { path: '/detail/:id', component: PrestamoDetail, name: "detail" },
            { path: '/prestamo-licenciatura/:licenciatura_id', component: PrestamoLicenciatura, name: "prestamo-licenciatura" },
            { path: '/contact', component: Contact, name: "contact" },
            { path: '/licenciaturas', component: PrestamoLicenciaturaList, name: "licenciaturas" },
          ]
      });