import Vue from 'vue';
import App from './App.vue';
import router from './router';
import posthogPlugin from './plugins/posthog';

Vue.config.productionTip = false;
Vue.use(posthogPlugin);

new Vue({
  router,
  render: h => h(App),
}).$mount('#app');
