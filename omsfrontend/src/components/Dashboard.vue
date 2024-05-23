<script setup>
import { onMounted } from 'vue';
import { useAuthStore } from '../stores/auth';
import Sidebar from './Navigation/Sidebar.vue';
import MyChart from './Chart.vue';

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
      <div class="flex flex-col w-full ml-64 mt-24"> <!-- Adjusted margin -->
        <div class="mb-6 ml-6">
          <h1 class="text-2xl font-bold text-gray-700">Dashboard</h1>
          <p class="italic text-sm font-medium text-gray-500">Essential data for efficient management.</p>
        </div>
        <div class="grid grid-cols-3 gap-6 mb-8 px-6"> <!-- Added padding to grid container -->
          <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-center w-16 h-16 bg-blue-200 rounded-full">
              <i class="fas fa-dollar-sign text-blue-600 text-3xl"></i>
            </div>
            <div class="ml-4">
              <p class="text-lg font-semibold text-gray-700">Total Revenue of All Sales</p>
              <p class="text-2xl font-bold text-gray-900">$1,234,567</p>
            </div>
          </div>
          <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-center w-16 h-16 bg-blue-200 rounded-full">
              <i class="fas fa-users text-blue-600 text-3xl"></i>
            </div>
            <div class="ml-4">
              <p class="text-lg font-semibold text-gray-700">Total Number of Customers</p>
              <p class="text-2xl font-bold text-gray-900">1,234</p>
            </div>
          </div>
          <div class="flex items-center justify-center p-6 bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-center w-16 h-16 bg-blue-200 rounded-full">
              <i class="fas fa-box text-blue-600 text-3xl"></i>
            </div>
            <div class="ml-4">
              <p class="text-lg font-semibold text-gray-700">Total Number of Products</p>
              <p class="text-2xl font-bold text-gray-900">567</p>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-6 px-6 w-full"> <!-- Adjusted to two-column layout -->
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Overview</h2>
            <MyChart />
          </div>
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Products</h2>
            <!-- Add your additional content here -->
          </div>
        </div>
      </div>
    </div>
  </template>
</template>
