import { useStorage } from "@vueuse/core";
import { IUser } from "@/types/User";
import { computed } from "vue";

export const UserStorage = useStorage<IUser>('user-data', {});

export const isAuthenticated = computed(() => {
    return UserStorage.value?.uuid ? true : false;

})

export const clear = () => UserStorage.value = null

export default {
    UserStorage,
    clear,
    isAuthenticated,
}