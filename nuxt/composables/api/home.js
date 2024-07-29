import axios from './axios';
const fetchCsrfToken = async () => {
    return await axios.get('/sanctum/csrf-cookie');
}
export async function contactMe(data, retryCount = 0){
    try{
        const response = await axios.post('/contact/email', {
            name: data.name,
            subject: data.subject,
            email: data.email,
            description: data.message,
        }, {
            headers: {
                'Accept': 'application/json',
            }
        });
        return { status:'success', message: response.data.message};
    }catch(err){
        if (err.response && err.response.status === 419) {
            if (retryCount < 3) {
                await fetchCsrfToken();
                return contactMe(data, retryCount + 1);
            } else {
                return { status: 'error', message: 'Request failed' };
            }
        }
        return { status:'error', message: err.response.data.message};
    }
}