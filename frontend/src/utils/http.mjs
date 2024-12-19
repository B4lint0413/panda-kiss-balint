import axios from 'axios'

export const http = axios.create({
    baseURL: "http://backend.localhost/api/",
    headers:{
        "Accept": "application/json",
        "Content-Type": "application/json" 
    }
})
