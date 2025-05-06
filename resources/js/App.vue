<template>
  <div class="app-container">
    <!-- Si l'utilisateur est connecté, on affiche l'accueil -->
    <div v-if="user" class="home-container">
      <h2>Bienvenue, {{ user.name }} !</h2>

      <!-- Bouton pour accéder au premier chapitre -->
      <button v-if="!showChapter" @click="startChapter">Commencer le premier chapitre</button>

     <!-- Bouton pour se déconnecter -->
     <button @click="handleLogout">Déconnexion</button>


      <!-- Section pour afficher le composant Chapter -->
      <Chapter v-if="showChapter" :initialChapterId="1" />
    </div>

    <!-- Sinon, on affiche soit la vue Register, soit Login -->
    <component v-else :is="currentViewComponent" @switch-view="switchView" @login-success="onLoginSuccess" />
  </div>
</template>

<script>
// Importation des deux vues
import Register from './components/Register.vue';
import Login from './components/Login.vue';
import Chapter from './components/Chapter.vue';
import AuthService from './services/auth';

export default {
  name: 'App',
  components: {
    Register,
    Login,
    Chapter,
  },
  data() {
    return {
      // Afficher d'abord l'inscription
      currentView: 'register',
      user: null,
      showChapter: false, // Gère l'affichage du chapitre
    };
  },
  computed: {
    // Calcule le composant à afficher selon la valeur de currentView
    currentViewComponent() {
      return this.currentView === 'register' ? 'Register' : 'Login';
    },
  },
  methods: {
    switchView(view) {
      if (view === 'login' || view === 'register') {
        this.currentView = view;
      }
    },
    async onLoginSuccess(userData) {
      this.user = userData;
    },
    async handleLogout() {
      try {
         await AuthService.logout();
        this.user = null;
        this.currentView = 'login';
      } catch (e) {
        console.error('Erreur de déconnexion', e);
      }
    },
    startChapter() {
      this.showChapter = true; // Affiche le composant Chapter
    },
  },
};
</script>

<style scoped>
.app-container {
  max-width: 600px;
  margin: 2rem auto;
  padding: 1rem;
  font-family: Arial, sans-serif;
  text-align: center;
}

.home-container {
  margin-top: 2rem;
}

button {
  display: block;
  margin: 1rem auto;
  padding: 0.7rem 1.5rem;
  background-color: #42b983;
  border: none;
  color: #fff;
  font-size: 1rem;
  cursor: pointer;
}

button:hover {
  background-color: #369870;
}
</style>
