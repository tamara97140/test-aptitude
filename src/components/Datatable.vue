<template>
  <table role="grid">
    <thead>
    <tr>
      <th>
        Référence
        <a @click.prevent="sortBy('reference', 'asc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"
            />
          </svg>
        </a>

        <a @click.prevent="sortBy('reference', 'desc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"
            />
          </svg>
        </a>
      </th>
      <th>
        Déposé le
        <a @click.prevent="sortBy('date', 'asc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"
            />
          </svg>
        </a>

        <a @click.prevent="sortBy('date', 'desc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"
            />
          </svg>
        </a>
      </th>
      <th>
        Demandeur
        <a @click.prevent="sortBy('demandeur', 'asc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"
            />
          </svg>
        </a>

        <a @click.prevent="sortBy('demandeur', 'desc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"
            />
          </svg>
        </a>
      </th>
      <th>
        Surface (m²)
        <a @click.prevent="sortBy('surface', 'asc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"
            />
          </svg>
        </a>

        <a @click.prevent="sortBy('surface', 'desc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"
            />
          </svg>
        </a>
      </th>
      <th>
        Nature des traveaux
        <a @click.prevent="sortBy('nature', 'asc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"
            />
          </svg>
        </a>

        <a @click.prevent="sortBy('nature', 'desc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"
            />
          </svg>
        </a>
      </th>
      <th>
        Adresse du terrain
        <a @click.prevent="sortBy('adresse', 'asc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"
            />
          </svg>
        </a>

        <a @click.prevent="sortBy('adresse', 'desc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"
            />
          </svg>
        </a>
      </th>
      <th>
        Ref cadastrales
        <a @click.prevent="sortBy('ref_cad', 'asc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"
            />
          </svg>
        </a>

        <a @click.prevent="sortBy('ref_cad', 'desc')" href="#">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 16px"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75"
            />
          </svg>
        </a>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr
        v-for="(item, index) in items"
    >
      <template
          v-if="inRange(index)"
      >
        <td v-text="item.reference" />
        <td v-text="item.date" />
        <td v-text="item.demandeur" />
        <td v-text="item.surface" />
        <td v-text="item.nature" />
        <td v-text="item.adresse" />
        <td v-text="item.ref_cad" />
      </template>
    </tr>
    </tbody>
  </table>

  <nav>
    <ul>
      <li
          v-for="page in pages"
      >
        <a
            @click="setPage(page)"
            href="#"
        >{{ page }}</a>
      </li>
    </ul>
  </nav>
</template>

<script setup lang="ts">

import {computed, ref, watch} from "vue";

type itemType = {
  reference : string,
  nature: string,
  date: number,
  demandeur: number,
  surface: number,
  adresse: string,
  ref_cad?: string,
}
type directionType = 'asc'|'desc';

const props = defineProps<{
  items: Array<itemType>,
  perPage: number,
}>();

const currentPage = ref<number>(1);
const startRange = ref<number>();
const endRange = ref<number>();

const setPage = (page: number) => currentPage.value = page;

const inRange = (index: number): boolean => index >= startRange.value! && index < endRange.value!;

const pages = computed((): number => Math.ceil(props.items.length / props.perPage));

const sortBy = (
    key: string,
    direction: directionType,
) => {
  props.items.sort((a: itemType, b: itemType): number => {
    if (typeof a[key] === 'number') {
      return (direction === 'asc' ? a : b)[key] - (direction === 'asc' ? b : a)[key];
    }

    if (typeof a[key] === 'string') {
      return (direction === 'asc' ? a : b)[key].localeCompare((direction === 'asc' ? b : a)[key]);
    }

    return (direction === 'asc' ? a : b)[key] - (direction === 'asc' ? b : a)[key];
  });
}

watch(currentPage, (currentPage) => {
  startRange.value = (currentPage - 1) * props.perPage;
  endRange.value = currentPage * props.perPage;
}, { immediate: true });
</script>
