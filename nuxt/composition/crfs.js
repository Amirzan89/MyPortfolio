import axios from "axios";
const publicConfig = useRuntimeConfig().public;
export async function getCsrf(data){
    await axios.get(publicConfig.baseURL + '/sanctum/csrf-cookie');
}