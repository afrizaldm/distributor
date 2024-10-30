import './bootstrap';
import Vue, { createApp } from 'vue'
import router from "./src/router";
import App from './src/App.vue'
import vuetify from "./plugins/vuetify";

export const removeLoadingElement = () => {
    let loadingElement: any = document.getElementById("loading-html");
    let appElement: any = document.getElementById("app");
    loadingElement.style.display = "none";
    appElement.style.display = "block";
    console.log('element loading preload removed')
}


const app = createApp(App)
app.use(vuetify)
app.use(router)

router.isReady().then(async () => {

    // const { data, error, response } = await user()

    removeLoadingElement()

    app.mount('#app')
})