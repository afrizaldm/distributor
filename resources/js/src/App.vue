<template>

    <div class="header">
        <img class="logo" src="../assets/logo.png" alt="logo">
        <div class="title">
            <p class="company">Coffee Valley</p>
            <p><strong>Teste every love in every cup!</strong></p>
            <p>One Alewife Center 3rd Floor</p>
            <p>Cambrige, MA 02140</p>
        </div>
    </div>

    <ul class="menu">
        <li v-for="item in menuItems" :key="item.id">
            <a class="menu-item" @click="to(item)">{{ item.name }}</a>
        </li>
        <li>
            <a class="menu-item" @click="">Logout</a>
        </li>
    </ul>

    <RouterView />

    <footer>
        <p>{{ formattedDate }}</p>
    </footer>
</template>
<script setup lang="ts">
import { computed } from "vue";
import router from './router';

const currentDate = new Date()

type IMenu = {
    id: number
    name: string
    link: string
}

const menuItems = [
    { id: 1, name: 'Home', link: '/home' },
    { id: 2, name: 'Catalog', link: '/catalogue' },
    { id: 3, name: 'Order Status', link: '/order' },
    { id: 3, name: 'Distributor', link: '/distribution' },
    { id: 4, name: 'Upload', link: '/upload/add' },
]

const to = (item: IMenu) => {
    router.push(item.link)
}

const formattedDate = computed(() => {
    return currentDate.toLocaleDateString("en-US", {
        month: "long",
        day: "numeric",
        year: "numeric"
    })
})

</script>
<style scoped lang="scss">
body {
    font-family: Arial, sans-serif;
    /* Mengatur font untuk seluruh halaman */
    margin: 0;
    /* Menghilangkan margin default */
    padding: 0;
    /* Menghilangkan padding default */
}

.menu {
    cursor: pointer;
    display: flex;
    /* Mengatur menu agar horizontal */
    // background-color: brown;
    /* Warna coklat */
    padding: 10px;
    /* Padding di dalam menu */
    margin: 2px;
    /* Margin di luar menu */
    list-style: none;
    /* Menghilangkan bullet point */
}

.menu-item {
    margin: 2px;
    padding: 5px 20px;
    /* Jarak antar item menu */
    color: white;

    background-color: brown;
    /* Warna teks */
    text-decoration: none;
    /* Menghilangkan garis bawah pada link */
}

.menu-item:hover {
    text-decoration: underline;
    /* Garis bawah saat hover */
}

footer {
    text-align: center;
    /* Mengatur teks footer agar rata tengah */
    padding: 20px;
    /* Padding di dalam footer */
    background-color: #f1f1f1;
    /* Warna latar belakang footer */
    margin-top: auto;
    /* Mengatur margin atas untuk footer */
}

.header {
    display: flex;
    align-items: center;
    /* Vertically centers items */
}

.logo {
    width: 100px;
    /* Sesuaikan ukuran sesuai kebutuhan */
    height: auto;
    margin-right: 10px;
    /* Menambahkan jarak antara logo dan teks */
}

.title p {
    margin: 0;
}

.company {
    font-size: 2rem;
    color: brown;
}
</style>