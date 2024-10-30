import { ITimestamps } from "@/types/others/Timestamps";

export type IUser = Partial<ITimestamps> & {
    id?: number | null
    uuid?: string
    user_id?: string
    email?: string
    email_verified_at?: Date | number
    password?: string
    remember_token?: string
}

export default IUser