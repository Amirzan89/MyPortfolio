const publicConfig = useRuntimeConfig().public;
const fetchCsrfToken = async (axios) => {
    return await axios.get('/sanctum/csrf-cookie');
}
export async function indexPage(axios){
    try{
        const response = await axios.get('/', {
            headers: {
                'Accept': 'application/json',
            },
        });
        return { status:'success', data: response.data};
    }catch(err){
        return { status:'error', message: err.response.data.message };
    }
}
export async function contactMe(axios, data, retryCount = 0){
    try{
        const response = await axios.post(publicConfig.baseURL + '/contact/email', {
            name: data.name,
            subject: data.subject,
            email: data.email,
            description: data.message,
        });
        return { status:'success', message: response.data.message};
    }catch(err){
        if (err.response && err.response.status === 419) {
            if (retryCount < 3) {
                await fetchCsrfToken(axios);
                return contactMe(axios, data, retryCount + 1);
            } else {
                return { status: 'error', message: 'Request failed' };
            }
        }
        return { status:'error', message: err.response.data.message};
    }
}
export async function projectPage(axios ,link, retryCount = 0){
    try{
        const response = await axios.get(publicConfig.baseURL + '/project/' + link,{
            headers: {
                'Accept': 'application/json',
            },
        });
        return { status:'success', message: response.data.message};
    }catch(err){
        if (err.response){
            if(err.response.status === 404){
                return { status: 'error', message: 'not found', code: 404};
            }
            if(err.response.status === 419) {
                if (retryCount < 3) {
                    await fetchCsrfToken(axios);
                    return projectPage(axios, retryCount + 1);
                } else {
                    return { status: 'error', message: 'Request failed' };
                }
            }
        }
        return { status:'error', message: err.response.data.message };
    }
}
export async function random(axios, data, retryCount = 0){
    try{
        const response = await axios.get(publicConfig.baseURL + '/');
        return { status:'success', message: response.data.message};
    }catch(err){
        if (err.response && err.response.status === 419) {
            if (retryCount < 3) {
                await fetchCsrfToken(axios);
                return random(axios, retryCount + 1);
            } else {
                return { status: 'error', message: 'Request failed' };
            }
        }
        return { status:'error', message: err.response.data.message };
    }
}