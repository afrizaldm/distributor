<template>
    <div>

        <table>
            <thead>
                <tr>
                    <th>Distributor Name</th>
                    <th>City</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in data" :key="(item.id as number)">
                    <td>{{ item.name }}</td>
                    <td>{{ item.city }}</td>
                    <td>
                        <button @click="edit(item)">[Edit]</button>
                    </td>
                </tr>
            </tbody>

        </table>

        <button @click="add">[Add]</button>
    </div>
</template>
<script setup lang="ts">
import { axios } from "@/modules/axios";
import { ref, onMounted } from "vue";
import { IDistribution } from "@/types";
import router from "@/router";

const data = ref<IDistribution[]>()

const init = async () => {
    const res = await axios.get('/distributions')

    console.log({ data: res.data })

    if (res.data.error) {
        return
    }

    data.value = res.data.data as IDistribution[]
}

const add = () => {
    router.push('/distribution/add')
}

const edit = (item: IDistribution) => {
    router.push('/distribution/' + item.id)
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