<template>
  <main class="container" style="margin-top: 10%">
    <h1>DEMANDE D'AUTORISATIONS D'URBANISME</h1>
    <form>
      <div>
        <label for="stringInput">Chaîne de caractères:</label>
        <input
            type="text"
            id="stringInput"
            v-model="stringValue"
            placeholder="Entrez une chaîne de caractères"
        />
      </div>
      <div>
        <label for="dateInput">Date:</label>
        <input type="date" id="dateInput" v-model="dateValue" />
      </div>
    </form>
    <datatable :items="filteredItems" :perPage="10" />
  </main>
</template>

<script setup lang="ts">
import { ref, watch } from 'vue';
import Datatable from './components/Datatable.vue';
import axios from 'axios';

const items = ref([]);
const filteredItems = ref([]);
const stringValue = ref<string | null>(null);
const dateValue = ref<string | null>(null);
const submitted = ref<boolean>(false);

// Function to format the date in d-m-Y format
const formattedDate = (dateString: string | null) => {
  if (!dateString) return '';
  const date = new Date(dateString);
  const day = String(date.getDate()).padStart(2, '0');
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const year = date.getFullYear();
  return `${day}-${month}-${year}`;
};

// Function to fetch data from API using POST
const fetchData = async () => {
  try {
    // Format the date parameter if it exists
    const formattedDateParam = dateValue.value ? formattedDate(dateValue.value) : null;

    // Send POST request with parameters in the body
    const response = await axios.post('/api/depots', {
      reference: stringValue.value || null,
      date: formattedDateParam || null,
    });

    items.value = response.data.depot;
    filteredItems.value = response.data.depot;
    submitted.value = true;
  } catch (error) {
    console.error('Failed to fetch data:', error);
  }
};

// Watchers to automatically call API when inputs change
watch([stringValue, dateValue], fetchData, { immediate: true });
</script>
