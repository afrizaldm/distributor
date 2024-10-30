import { ITimestamps } from "@/types/others/Timestamps";

export type IDistribution = Partial<ITimestamps> & {
    id: number
    name?: string
    city?: string
    state?: string
    email?: string
    country?: string
    phone?: string
}

export default IDistribution