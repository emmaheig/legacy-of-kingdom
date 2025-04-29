<template>
    <div class="login-container">
        <h2>Connexion</h2>
        <form @submit.prevent="handleLogin">
            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" type="email" v-model="email" placeholder="Entrez votre email" required />
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" v-model="password" placeholder="Entrez votre mot de passe"
                    required />
            </div>
            <button type="submit">Se connecter</button>
        </form>
        <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
        <p>
            Pas encore inscrit ?
            <button @click="$emit('switch-view', 'register')">S'inscrire</button>
        </p>
    </div>
</template>

<script>
import AuthService from '../services/auth';

export default {
    name: 'Login',
    data() {
        return {
            email: '',
            password: '',
            errorMessage: ''
        }
    },
    methods: {
        async handleLogin() {
            try {
                const response = await AuthService.login({
                    email: this.email,
                    password: this.password
                });
                // Emit l'événement login-success avec les infos de l'utilisateur
                this.$emit('login-success', response.data.user);
            } catch (error) {
                this.errorMessage = "Erreur de connexion. Veuillez vérifier vos identifiants.";
            }
        }
    }
}
</script>

<style scoped>
.login-container {
    max-width: 400px;
    margin: 2rem auto;
    padding: 1rem;
    font-family: Arial, sans-serif;
}

.input-group {
    margin-bottom: 1rem;
}

.input-group label {
    display: block;
    margin-bottom: 0.5rem;
}

.input-group input {
    width: 100%;
    padding: 0.5rem;
    box-sizing: border-box;
}

button {
    display: block;
    width: 100%;
    padding: 0.7rem;
    background-color: #42b983;
    border: none;
    color: #fff;
    font-size: 1rem;
    cursor: pointer;
}

button:hover {
    background-color: #369870;
}

.error {
    color: red;
    margin-top: 1rem;
    text-align: center;
}
</style>
