import { createApp } from 'vue';
import Chapter from './components/Chapter.vue';

const app = createApp({
  template: `
    <div id="app">
      <Chapter :initialChapterId="1" />
    </div>
  `,
  components: {
    Chapter,
  },
});

app.mount('#app');
