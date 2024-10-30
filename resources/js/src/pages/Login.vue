<template>
    <div class="form-container">
        <form @submit.prevent="handleSubmit">
            <div>
                <label for="name">User ID:</label>
                <input v-model="formData.user_id" id="name" type="text" required />
            </div>

            <div>
                <label for="city">Password:</label>
                <input v-model="formData.password" id="password" type="password" required />
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</template>
<script setup lang="ts">
import { ref } from "vue";
import { axios } from "@/modules/axios";
import router from "@/router";

type IUserPost = {
    user_id: string
    password: string
}

const formData = ref<IUserPost>({
    user_id: '',
    password: '',
})

const handleSubmit = async () => {
    const res = await axios.post('/auth/login', formData.value)

    console.log({ date: res.data })

    if (res.data.error) {
        return
    }

    clearForm()
    router.back()

}

const clearForm = () => {
    formData.value = {
        user_id: '',
        password: '',
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