<script setup>
import { onMounted } from 'vue';
import { useAuthStore } from '../stores/auth';
import Sidebar from './Navigation/Sidebar.vue';

const authStore = useAuthStore();

onMounted(async () => {
  await authStore.getUser();
});
</script>

<template>
  <!-- Sidebar -->
  <Sidebar />
  <!-- Content -->
  <template v-if="!authStore.user">
    <div class="flex h-screen bg-blue-100">
      <div class="flex flex-col items-center justify-center w-full">
        <h1 class="text-4xl font-bold mb-4 text-sky-800">Uh-oh... Seems that you are not logged in.</h1>
      </div>
    </div>
  </template>
  <template v-else>
    <div class="flex h-screen bg-blue-100">
      <div class="flex flex-col w-full ml-64 mt-24">
        
        <!-- Customer Orders -->
        <div class="mb-6 ml-6">
          <h1 class="text-2xl font-bold text-gray-700">Customer Orders</h1>
          <p class="italic text-sm font-medium text-gray-500">List of customer orders.</p>
        </div>
        <!-- Customer Orders Component -->
      </div>
    </div>
  </template>
</template>
