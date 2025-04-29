import axios from '../axios';

export default {
  register(userData) {
    return axios.post('/register', userData);
  },
  login(credentials) {
    return axios.post('/login', credentials);
  },
  logout() {
    return axios.post('/logout');
  },
  getUser() {
    return axios.get('/user');
  }
};
