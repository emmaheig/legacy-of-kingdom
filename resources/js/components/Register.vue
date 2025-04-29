<template>
    <div class="register-container">
        <h2>Inscription</h2>
        <form @submit.prevent="handleRegister">
            <div class="input-group">
                <label for="name">Nom</label>
                <input id="name" type="text" v-model="name" placeholder="Votre nom" required />
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" type="email" v-model="email" placeholder="Votre email" required />
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" v-model="password" placeholder="Votre mot de passe" required />
            </div>
            <div class="input-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input id="password_confirmation" type="password" v-model="passwordConfirmation"
                    placeholder="Confirmez votre mot de passe" required />
            </div>
            <button type="submit">S'inscrire</button>
        </form>
        <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
        <p>
            Déjà inscrit ?
            <button @click="$emit('switch-view', 'login')">Se connecter</button>
        </p>
    </div>
</template>

<script>
import AuthService from '../services/auth';

export default {
    name: 'Register',
    data() {
        return {
            name: '',
            email: '',
            password: '',
            passwordConfirmation: '',
            errorMessage: ''
        }
    },
    methods: {
        async handleRegister() {
            if (this.password !== this.passwordConfirmation) {
                this.errorMessage = "Les mots de passe ne correspondent pas";
                return;
            }
            try {
                // Appeler le service d'inscription
                await AuthService.register({
                    name: this.name,
                    email: this.email,
                    password: this.password,
                });
                // Après inscription, passe à la vue login
                this.$emit('switch-view', 'login');
            } catch (error) {
                this.errorMessage = "Erreur lors de l'inscription. Vérifiez vos informations.";
            }
        }
    }
}
</script>

<style scoped>
.register-container {
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
