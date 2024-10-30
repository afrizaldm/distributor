// import './styles/vuetify/main.scss'
// import { createVuetify, useTheme } from 'vuetify'
// import { useDark } from '@vueuse/core'

// // Translations provided by Vuetify
// import { en, id } from 'vuetify/locale'


// import { VDateInput } from 'vuetify/labs/VDateInput'
// import { VNumberInput } from 'vuetify/labs/VNumberInput'
// import { VCalendar } from 'vuetify/labs/VCalendar'
// import { VPullToRefresh } from 'vuetify/labs/VPullToRefresh'

// const isDark = useDark();

// export default createVuetify({
//     theme: {
//         defaultTheme: isDark.value ? 'dark' : 'light',
//     },
//     components: [
//         VDateInput,
//         VNumberInput,
//         VCalendar,
//         VPullToRefresh,
//     ],
//     locale: {
//         locale: 'id',
//         fallback: 'en',
//         messages: { id, en },
//     },
//     date: {
//         locale: {

//         },
//     },
// })

import { createApp } from 'vue'

// Vuetify
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    components,
    directives,
})

export default vuetify