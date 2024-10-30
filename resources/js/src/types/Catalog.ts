import { ITimestamps } from "@/types/others/Timestamps";

export type IDistribution = Partial<ITimestamps> & {
    id: number | null
    bean?: string
    description?: string
    price?: number,
}

export default IDistribution