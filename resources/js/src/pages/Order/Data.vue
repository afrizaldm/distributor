<template>

    <table>
        <thead>
            <tr>
                <th>Distributor Name</th>
                <th>City</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in data" :key="item.id">
                <td>{{ item.name }}</td>
                <td>[Edit]</td>
            </tr>
        </tbody>
    </table>
</template>
<script setup lang="ts">
import { axios } from "@/modules/axios";
import { ref, onMounted } from "vue";
import { IDistribution } from "@/types";

const data = ref<IDistribution[]>()

const init = async() => {
    const res = await axios.get('/distributions')
    
    console.log({data: res.data})

    if(res.data.error) {
        return
    }

    data.value = res.data.data as IDistribution[]
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