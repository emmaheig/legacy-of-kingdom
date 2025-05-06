<!-- filepath: c:\Legacy of Kingdoms\backEnd\resources\js\components\Chapter.vue -->
<template>
  <div class="chapter-container">
    <h1>{{ chapter?.title }}</h1>
    <p>{{ chapter?.content }}</p>
    <ul>
      <li v-for="choice in choices" :key="choice.id">
        <button @click="handleChoice(choice)">{{ choice.content }}</button>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from '../axios';

export default {
  props: {
    initialChapterId: {
      type: Number,
      required: true,
    },
  },
  data() {
    return {
      chapter: null,
      choices: [],
    };
  },
  methods: {
    async fetchChapter(id) {
      try {
        const response = await axios.get(`/chapters/${id}`);
        this.chapter = response.data;
        this.choices = response.data.choices;
        localStorage.setItem('currentChapterId', id); // Sauvegarde l'ID du chapitre actuel
      } catch (error) {
        console.error('Erreur lors de la récupération du chapitre :', error);
      }
    },
    async handleChoice(choice) {
      if (choice.next_chapter_id) {
        this.fetchChapter(choice.next_chapter_id);
      } else {
        alert('Fin de l’histoire !');
      }
    },
  },
  mounted() {
    const savedChapterId = localStorage.getItem('currentChapterId');
    if (savedChapterId) {
      this.fetchChapter(savedChapterId); // Charge le chapitre sauvegardé
    } else {
      this.fetchChapter(this.initialChapterId); // Charge le chapitre initial
    }
    },
  };
</script>

<style scoped>
.chapter-container {
  min-height: 100vh;
  padding: 2rem;
  background-image: url('/chapter_bg.png');
  background-size: cover;
  background-position: center;
  /* pour rendre le texte lisible */
  color: #fff;
  text-shadow: 0 0 4px rgba(0,0,0,0.7);
  /* empiler les enfants au-dessus du background */
  position: relative;
  z-index: 1;
}

/* pour un overlay sombre */
.chapter-container::before {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.4);
  z-index: -1;
}
</style>

