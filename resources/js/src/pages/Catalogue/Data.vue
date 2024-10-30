<template>

    <table>
        <thead>
            <tr>
                <th>Bean</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in data" :key="(item.id as number)">
                <td>{{ item.bean }}</td>
                <td>{{ item.description }}</td>
                <td>{{ item.price }}</td>
            </tr>
        </tbody>
    </table>
    
    <button @click="add">[Add]</button>
</template>
<script setup lang="ts">
import { axios } from "@/modules/axios";
import { ref, onMounted } from "vue";
import { ICatalog } from "@/types";
import router from "@/router";

const data = ref<ICatalog[]>()

const init = async() => {
    const res = await axios.get('/catalogs')
    
    console.log({data: res.data})

    if(res.data.error) {
        return
    }

    data.value = res.data.data as ICatalog[]
}

const add = () => {
    router.push('/catalogue/add')
}

onMounted(() => {
    init()
})
</script>
<style scoped lang="scss">
table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    padding: 8px 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

table,
th,
td {
    border: none;
}
</style>