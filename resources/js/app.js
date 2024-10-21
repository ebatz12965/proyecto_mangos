/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

window.routes = {
    pedidoStore: "{{ route('pedido.store') }}"
};



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('encabezado1', require('./components/encabezado1.vue').default);
Vue.component('pie-pagina', require('./components/pie-pagina.vue').default);
Vue.component('carrusel-img', require('./components/carrusel-img.vue').default);
Vue.component('carrusel-img2', require('./components/carrusel-img2.vue').default);
Vue.component('table1', require('./components/table1.vue').default);
Vue.component('table2', require('./components/table2.vue').default);
Vue.component('form1', require('./components/form1.vue').default);
Vue.component('imagens', require('./components/imagens.vue').default);
Vue.component('modal1', require('./components/modal1.vue').default);
Vue.component('modal2', require('./components/modal2.vue').default);
Vue.component('mangos-img', require('./components/mangos-img.vue').default);
Vue.component('create-user', require('./components/create-user.vue').default);
Vue.component('table-user', require('./components/table-user.vue').default);
Vue.component('prueba-api', require('./components/prueba-api.vue').default);
Vue.component('inicio-sesion', require('./components/inicio-sesion.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

});
