<template>
    <div class="form-container">
        <form @submit.prevent="handleSubmit">
            <div>
                <label for="name">Name:</label>
                <input v-model="formData.name" id="name" type="text" required />
            </div>

            <div>
                <label for="city">City:</label>
                <input v-model="formData.city" id="city" type="text" required />
            </div>

            <div>
                <label for="state">State:</label>
                <input v-model="formData.state" id="state" type="text" required />
            </div>

            <div>
                <label for="county">County:</label>
                <select v-model="formData.country" id="county" required>
                    <option disabled value="">Please select</option>
                    <option :selected="formData.country == county" v-for="county in counties" :key="county" :value="county">
                        {{ county }}
                    </option>
                </select>
            </div>

            <div>
                <label for="phone">Phone:</label>
                <input v-model="formData.phone" id="phone" type="tel" required />
            </div>

            <div>
                <label for="email">Email:</label>
                <input v-model="formData.email" id="email" type="email" required />
            </div>

            <button type="submit">Add</button>
        </form>
    </div>
</template>
<script setup lang="ts">
import { onMounted, reactive, ref } from "vue";
import { IDistribution } from "@/types";
import { axios } from "@/modules/axios";
import router from "@/router";
import { useRoute } from "vue-router";

const route = useRoute()

let formData = ref<IDistribution>({
    id: null,
    name: '',
    city: '',
    state: '',
    country: '',
    phone: '',
    email: '',
})
const counties = ["County 1", "County 2", "County 3"]

const handleSubmit = async () => {

    if (formData.value.id) {
        const res = await axios.put('/distributions/'  + formData.value.id, formData.value)

        console.log({ date: res.data })

        if (res.data.error) {
            return
        }

    } else {
        const res = await axios.post('/distributions', formData.value)

        console.log({ date: res.data })

        if (res.data.error) {
            return
        }
    }

    clearForm()
    router.back()

}

const clearForm = () => {
    formData.value = {
        id: null,
        name: '',
        city: '',
        state: '',
        country: '',
        phone: '',
        email: '',
    }
};

const init = async () => {
    const id: any = Number(route.params?.id) ?? null

    console.log(id)

    if(!id) {
        return
    }

    const res = await axios.get('/distributions/' + id)

    console.log({ data: res.data.data })

    if (res.data.error) {
        return
    }


    formData.value = res.data.data
}

onMounted(() => {
    init()
})

</script>
<style scoped lang="scss">
.form-container {
    width: 300px;
    margin: auto;
}

form div {
    margin-bottom: 10px;
}

input,
select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

input:focus,
select:focus {
    outline: none;
    border-color: #4a90e2;
    /* Highlight color on focus */
}

button {
    margin-top: 10px;
    padding: 10px;
    background-color: #4a90e2;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

button:hover {
    background-color: #357ab7;
}
</style>