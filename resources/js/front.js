/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');
 
 import App from "./views/App";
 import Home from "./pages/Home";
 import About from "./pages/About";
 import Contact from "./pages/Contact";
 import VueRouter from "vue-router";
 import Vue from "vue";
 
 Vue.use(VueRouter);
 
 const router = new VueRouter({
     routes:[
        {
            mode: 'history',
            path:'/',
            name: 'home',
            component: Home
         },
         {
            path:'/about',
            name: 'about',
            component: About
         },
         {
            path:'/contact',
            name: 'contact',
            component: Contact
         }
     ]
 });
 
 /**
  * Next, we will create a fresh Vue application instance and attach it to
  * the page. Then, you may begin adding components to this application
  * or customize the JavaScript scaffolding to fit your unique needs.
  */
 
  const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});