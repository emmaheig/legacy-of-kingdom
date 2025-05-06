import axios from 'axios';

const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

const instance = axios.create({
  baseURL: 'http://localhost:8000/api/v1', // adapte selon ton URL backend
  withCredentials: true, 
});
instance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

if (token) instance.defaults.headers.common['X-CSRF-TOKEN'] = token;

export default instance;
