/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
<<<<<<< HEAD
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */
=======
 * registering components with the application instance 'so' they are ready
 * to use in your application's views. An example is included for you.
 */
import VueSweetalert2 from "vue-sweetalert2";
// import 'sweetalert2/dist/sweetalert2.min.css'
import '@sweetalert2/themes/borderless/borderless.scss';
>>>>>>> majid

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

<<<<<<< HEAD
=======

//ADMIN
import DeleteComponent from "@/Components/panel/DeleteComponent.vue";

app.component('delete-component', DeleteComponent);
>>>>>>> majid
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
<<<<<<< HEAD
 * Finally, we will attach the application instance to a HTML element with
=======
 * Finally, we will attach the application instance to 'a' HTML element with
>>>>>>> majid
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

<<<<<<< HEAD
=======
const options = {
    confirmButtonColor: '#41b882',
    cancelButtonColor: '#ff7674',
};

app.use(VueSweetalert2,options);
>>>>>>> majid
app.mount('#app');
