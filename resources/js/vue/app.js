import Vue from "vue";
import Vuetify from "vuetify";
import 'vuetify/dist/vuetify.min.css';
import csv from "./composants/Csv.vue"

Vue.use(Vuetify);
Vue.component('csv', csv)

const app = new Vue({
    el:"#csv",
    vuetify: new Vuetify({})
})

export default new Vuetify(app)