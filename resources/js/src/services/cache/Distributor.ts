import { useStorage } from "@vueuse/core";
import { IDistribution } from "@/types";
import { computed } from "vue";

export const DistributionStorage = useStorage<IDistribution[]>('cache-distributor', []);

export const cache = (value: IDistribution) => {
    DistributionStorage.value.push(value)
}

export const clear = () => DistributionStorage.value = null

export default {
    DistributionStorage,
    clear,
}