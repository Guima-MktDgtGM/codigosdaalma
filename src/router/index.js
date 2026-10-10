import Vue from 'vue';
import Router from 'vue-router';
//import LeituradeMapaQuiz from '../components/LeituradeMapaQuiz.vue';
//import LeituradeMapaVSL from '../components/LeituradeMapaVSL.vue';
import HelloWorld from '../components/HelloWorld.vue'
import PaginaPrincipal from '../components/PaginaPrincipal.vue'
import KirvanoUpsellVideoVSL from '../components/KirvanoUpsellVideoVSL.vue'
import TermosDeUso from '../components/TermosDeUso.vue'
import PoliticaDePrivacidade from '../components/PoliticaDePrivacidade.vue'
import Contato from '../components/Contato.vue'

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/enviodosdados',
      name: 'HelloWorld',
      component: HelloWorld,
      props: true
    },
    /*{
      path: '/664d453bck',
      name: 'LeituradeMapaQuiz',
      component: LeituradeMapaQuiz,
    },
    {
      path: '/leitura',
      name: 'LeituradeMapaVSL',
      component: LeituradeMapaVSL,
      props: true
    },*/
    {
      path: '/pGwZSDj',
      name: 'PaginaPrincipal',
      component: PaginaPrincipal,
      props: true
    },
    {
      path: '/',
      name: 'KirvanoUpsellVideoVSL',
      component: KirvanoUpsellVideoVSL,
      props: false
    },
    {
      path: '/termos-de-uso',
      name: 'TermosDeUso',
      component: TermosDeUso
    },
    {
      path: '/politica-de-privacidade',
      name: 'PoliticaDePrivacidade',
      component: PoliticaDePrivacidade
    },
    {
      path: '/contato',
      name: 'Contato',
      component: Contato
    },
],
});
