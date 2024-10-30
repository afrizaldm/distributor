import { useStorage } from "@vueuse/core";

export const TokenStorage = useStorage<string>('user-token', '');

export const clear = () => TokenStorage.value = ''