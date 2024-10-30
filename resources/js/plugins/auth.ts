import { auth } from "@/modules/auth";
import { sleep } from "@/modules/sleep";
import { isAuthenticated } from "@/services/selected-user/user";

export const user = async () => {
    const { data, error, response } = await auth()

    await sleep(1000)

    return { data, error, response }
}

export {
    isAuthenticated
}