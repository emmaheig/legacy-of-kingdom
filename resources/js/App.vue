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
      currentView: 'login',

      // Récupérer l'utilisateur depuis le back
      user: Number(document.querySelector('meta[name="is-auth"]')?.getAttribute('content')),
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
        localStorage.removeItem('currentChapterId'); // Supprime l'ID du chapitre en cours

      } catch (e) {
        console.error('Erreur de déconnexion', e);
      }
    },

    async checkAuth() {
      try {
        const response = await AuthService.getUser(); // Appelle une API pour récupérer l'utilisateur
        this.user = response.data; // Restaure les informations de l'utilisateur
      } catch (error) {
        console.error('Utilisateur non authentifié', error);
        this.user = null;
        this.currentView = 'login'; // Redirige vers la vue Login si non authentifié
        localStorage.removeItem('currentChapterId'); // Supprime l'ID du chapitre
      }
    },

    startChapter() {
      this.showChapter = true; // Affiche le composant Chapter
      localStorage.setItem('currentChapterId', 1); // Sauvegarde l'ID du chapitre 1
    },
  },

  mounted() {
    // Vérifie si un chapitre est sauvegardé dans localStorage
    const savedChapterId = localStorage.getItem('currentChapterId');
    if (savedChapterId) {
      this.showChapter = true; // Affiche le composant Chapter
    }


  },
    saveCurrentChapter(chapterId) {
      localStorage.setItem('currentChapterId', chapterId); // Sauvegarde l'ID du chapitre actuel
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
