import { ITimestamps } from "@/types/others/Timestamps";

export type IDistribution = Partial<ITimestamps> & {
    id: number | null;
    name?: string
    city?: string
    state?: string
    email?: string
    country?: string
    phone?: string
    status?: string // opened, edited, new
}

export default IDistribution