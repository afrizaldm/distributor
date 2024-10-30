import './bootstrap';


import Vue, { createApp } from 'vue'
import router from "./src/router";
import App from './src/App.vue'


import vuetify from "./plugins/vuetify";


const app = createApp(App)
app.use(vuetify)
app.use(router)

router.isReady().then(async () => {

    // const { data, error, response } = await user()

    // removeLoadingElement()

    app.mount('#app')
})