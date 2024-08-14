<template>
  <h1>DEMANDE D'AUTORISATIONS D'URBANISME</h1>
  <main class="container" style="margin-top: 10%">
    <datatable
        :items="items"
        :perPage=10
    />
  </main>
</template>

<script setup lang="ts">
import { onMounted, ref } from 'vue';
import Datatable from './components/Datatable.vue';
import axios from 'axios';

const items = ref([]);

onMounted(async () => {
  await axios.get('/api/depots')
      .then((response) =>  {
        console.log('bonjour: ' + response.data['depot']);
        items.value = response.data['depot']
        console.log(items.value)
      });
});
</script>