import axios from 'axios';

const instance = axios.create({
  baseURL: 'http://localhost:8000/api/v1', // adapte selon ton URL backend
  withCredentials: true,  // IMPORTANT pour Laravel Sanctum si tu utilises des cookies
});

export default instance;
