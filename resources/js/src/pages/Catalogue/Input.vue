<template>
    <div class="form-container">
        <form @submit.prevent="handleSubmit">
            <div>
                <label for="name">Name:</label>
                <input v-model="formData.bean" id="name" type="text" required />
            </div>

            <div>
                <label for="city">City:</label>
                <input v-model="formData.bean" id="city" type="text" required />
            </div>

            <div>
                <label for="state">description:</label>
                <input v-model="formData.description" id="state" type="text" required />
            </div>

            <div>
                <label for="state">Price:</label>
                <input v-model="formData.price" id="state" type="text" required />
            </div>
            

            <button type="submit">Add</button>
        </form>
    </div>
</template>
<script setup lang="ts">
import { ref } from "vue";
import { ICatalog } from "@/types";
import { axios } from "@/modules/axios";
import router from "@/router";

const formData = ref<ICatalog>({
    id: null,
    bean: '',
    description: '',
    price: 0,
})

const handleSubmit = async () => {
    const res = await axios.post('/catalogs', formData.value)

    console.log({ date: res.data })

    if (res.data.error) {
        return
    }

    clearForm()
    router.back()

}

const clearForm = () => {
    formData.value = {
        id: null,
        bean: '',
        description: '',
        price: 0,
    }
};

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