<!-- filepath: c:\Legacy of Kingdoms\backEnd\resources\js\components\Chapter.vue -->
<template>
  <div>
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
