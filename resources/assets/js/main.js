import Vue from 'vue'
import App from './App'
import router from './router'
import Element from 'element-ui'

Vue.use(Element)

Vue.config.productionTip = false

const app = new Vue({
  el: '#app',
  router,
  render: h => h(App)
});
