<template>
  <div>Déconnexion en cours…</div>
</template>

<script>
import AuthService from '@/services/auth';

export default {
  name: 'Logout',
  async mounted() {
    try {
      await AuthService.logout();
      this.$router.replace({ name: 'Login' });
    } catch (e) {
      console.error('Erreur logout', e);
      // Tu peux rediriger quand même
      this.$router.replace({ name: 'Login' });
    }
  }
}
</script>
