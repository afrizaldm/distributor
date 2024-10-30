// import { createRouter, createWebHistory } from 'vue-router'

import { createRouter, createWebHistory } from "vue-router";
import { RouteRecordRaw } from 'vue-router';

import Home from '@/pages/Home.vue'
import Login from '@/pages/Login.vue'
import CatalogueData from '@/pages/Catalogue/Data.vue'
import CatalogueInput from '@/pages/Catalogue/Input.vue'
import DistributionData from '@/pages/Distribution/Data.vue'
import DistributionInput from '@/pages/Distribution/Input.vue'

import OrderData from '@/pages/Order/Data.vue'
import OrderInput from '@/pages/Order/Input.vue'
import UploadData from '@/pages/Upload/Data.vue'
import UploadInput from '@/pages/Upload/Input.vue'

const routes: RouteRecordRaw[] = [
  {
    path: '/',
    name: '',
    redirect: { name: 'home' }
  },
  {
    path: '/home',
    name: 'home',
    component: Home
  },
  {
    path: '/login',
    name: 'login',
    component: Login
  },
  {
    path: '/catalogue',
    name: 'catalogue',
    component: CatalogueData
  },
  {
    path: '/catalogue/add',
    name: 'catalogue-add',
    component: CatalogueInput
  },
  {
    path: '/catalogue/:id',
    name: 'catalogue-show',
    component: CatalogueInput
  },
  {
    path: '/distribution',
    name: 'distribution',
    component: DistributionData
  },
  {
    path: '/distribution/add',
    name: 'distribution-add',
    component: DistributionInput
  },
  {
    path: '/distribution/:id',
    name: 'distribution-show',
    component: DistributionInput
  },

  // tambahan
  {
    path: '/order',
    name: 'order',
    component: OrderData
  },
  {
    path: '/order/add',
    name: 'order-add',
    component: OrderInput
  },
  {
    path: '/order/:id',
    name: 'order-show',
    component: OrderInput
  },
  {
    path: '/upload',
    name: 'upload',
    component: UploadData
  },
  {
    path: '/upload/add',
    name: 'upload-add',
    component: UploadInput
  },
  {
    path: '/upload/:id',
    name: 'upload-show',
    component: UploadInput
  },
]

const router = createRouter({
  history: createWebHistory('/app'),
  routes,
})

export default router