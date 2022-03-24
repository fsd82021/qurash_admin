import Vue from "vue";
import VueMeta from "vue-meta";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import i18n from "./i18n";
import "./custom/custom";

if (!localStorage.getItem("language")) {
    localStorage.setItem("language", "en");
}

Vue.config.productionTip = false;
Vue.use(VueMeta, {
    keyName: "head",
});

new Vue({
    router,
    store,
    i18n,
    render: (h) => h(App),
}).$mount("#app");
