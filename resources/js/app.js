import './bootstrap'
import { createApp } from 'vue'
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import HairCare from './components/HairCare.vue'
import InteriorDesign from './components/InteriorDesign.vue'
import FeaturesSection from './components/FeaturesSection.vue'
import ProServices from './components/ProServices.vue'
import CategoryList from './components/CategoryList.vue'
import ServiceList from './components/ServiceList.vue'
import SaleList from './components/SaleList.vue'

const app = createApp()

app.component('haircare', HairCare)
app.component('interiordesign', InteriorDesign)
app.component('features', FeaturesSection)
app.component('proservices', ProServices)
app.component('categorylist', CategoryList)
app.component('servicelist', ServiceList)
app.component('salelist', SaleList)

app.mount('#app')