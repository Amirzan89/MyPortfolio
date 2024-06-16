import axios from './axios';
const fetchCsrfToken = async () => {
    return await axios.get('/sanctum/csrf-cookie');
}
export async function indexPage(){
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
export async function contactMe(data, retryCount = 0){
    try{
        const response = await axios.post('/contact/email', {
            name: data.name,
            subject: data.subject,
            email: data.email,
            description: data.message,
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
export async function projectPage(retryCount = 0){
    try{
        const response = await axios.get('/projects');
        return { status:'success', message: response.data.message};
    }catch(err){
        if (err.response){
            if(err.response.status === 404){
                navigateTo('/projects');
            }
            if(err.response.status === 419) {
                if (retryCount < 3) {
                    await fetchCsrfToken();
                    return projectDetailPage(link, retryCount + 1);
                } else {
                    return { status: 'error', message: 'Request failed' };
                }
            }
        }
        return { status:'error', message: err.response.data.message };
    }
}
export async function projectDetailPage(link, retryCount = 0){
    try{
        const response = await axios.get('/projects/' + link,{
            headers: {
                'Accept': 'application/json',
            },
        });
        return { status:'success', message: response.data.message};
    }catch(err){
        if (err.response){
            if(err.response.status === 404){
                return { status:'error', message: 'not found', code: 404 };
            }
            if(err.response.status === 419) {
                if (retryCount < 3) {
                    await fetchCsrfToken();
                    return projectDetailPage(link, retryCount + 1);
                } else {
                    return { status: 'error', message: 'Request failed' };
                }
            }
        }
        return { status:'error', message: err.response.data.message };
    }
}