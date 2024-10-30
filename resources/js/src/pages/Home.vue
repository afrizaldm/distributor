<template>
    <div class="main">

        <div v-for="item in data" :key="(item.id as number)">
            <div class="bean">
                <p><strong>Bean of the day</strong></p>
                <p>{{ item.bean }}</p>
            </div>
            <div class="price">
                <p><strong>Sale Price</strong></p>
                <p>{{ item.price }}</p>
            </div>
            <div class="description">
                <p><strong>Description</strong></p>
                <p>{{ item.description }}</p>
            </div>
        </div>

    </div>
</template>
<script setup lang="ts">
import { axios } from "@/modules/axios";
import { ref, onMounted } from "vue";
import { ICatalog } from "@/types";
import router from "@/router";

const data = ref<ICatalog[]>()

const init = async () => {
    const res = await axios.get('/catalogs')

    console.log({ data: res.data })

    if (res.data.error) {
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
.bean,
.price,
.description {
    margin-bottom: 10px;
}

.bean p:first-of-type,
.price p:first-of-type,
.description p:first-of-type {
    font-weight: bold;
}

.main {
    margin: 20px;
}
</style>