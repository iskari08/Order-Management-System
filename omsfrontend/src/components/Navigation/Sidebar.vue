<template>
  <template v-if="!authStore.user">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start rtl:justify-end">
            <a href="/dashboard" class="flex items-center">
              <img src="../../assets/OrderManagement.png" class="h-8 me-3" alt="FlowBite Logo" />
              <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
                Order Management System
              </span>
            </a>
          </div>
          <div class="flex items-center justify-end">
            <div v-if="authStore.user" class="text-right">
              <h1 class="text-lg font-bold text-white">{{ authStore.user.name }}</h1>
              <h1 class="text-sm text-slate-500">{{ authStore.user.email }}</h1>
            </div>
            <div v-else class="text-right">
              <h1 class="text-white">Go and <router-link to="/" class="text-blue-700">Login</router-link></h1>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </template>
  <template v-else>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start rtl:justify-end">
            <a href="/dashboard" class="flex items-center">
              <img src="../../assets/OrderManagement.png" class="h-8 me-3" alt="FlowBite Logo" />
              <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">
                Order Management System
              </span>
            </a>
          </div>
          <div class="flex items-center justify-end">
            <div v-if="authStore.user" class="text-right">
              <h1 class="text-lg font-bold text-white">Welcome, {{ authStore.user.name }}!</h1>
              <h1 class="text-sm text-slate-500">{{ authStore.user.email }}</h1>
            </div>
            <div v-else class="text-right">
              <h1 class="text-white">Go and <router-link to="/" class="text-blue-700">Login</router-link></h1>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
      <div class="h-full flex flex-col justify-between px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
          <li>
            <router-link to="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
              </svg>
              <span class="ms-3">Dashboard</span>
            </router-link>
          </li>
          <li>
            <router-link to="/order" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
            </router-link>
          </li>
          <li>
            <router-link to="/usermgt" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 100 20A10 10 0 0010 0zm0 18.75A8.75 8.75 0 1118.75 10 8.759 8.759 0 0110 18.75zM10 5.5a2.75 2.75 0 11-2.75 2.75A2.75 2.75 0 0110 5.5zm0 10a7.28 7.28 0 00-5.978-3.15c-.325 0-.618.105-.846.293A7.222 7.222 0 0010 17.25a7.222 7.222 0 006.824-4.607c-.228-.188-.521-.293-.846-.293A7.28 7.28 0 0010 15.5z" />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">User</span>
            </router-link>
          </li>
        </ul>
        <div>
          <button @click="authStore.handleLogout" class="w-full text-left flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-3a1 1 0 1 0-2 0v3H5V5h8v3a1 1 0 1 0 2 0V5a2 2 0 0 0-2-2zm-2 7a1 1 0 0 1 0-2h7a1 1 0 1 1 0 2h-7zm-1 2a1 1 0 0 0 1 1h7a1 1 0 1 0 0-2h-7a1 1 0 0 0-1 1zm1 3a1 1 0 0 1 0-2h7a1 1 0 1 1 0 2h-7zm-1 2a1 1 0 0 0 1 1h7a1 1 0 1 0 0-2h-7a1 1 0 0 0-1 1z"/>
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
          </button>
        </div>
      </div>
    </aside>
  </template>
</template>

<script setup>
import { useAuthStore } from '../../stores/auth';

const authStore = useAuthStore();
</script>

<style>
.dropdown-menu {
  display: none;
}
.dropdown-menu.show {
  display: block;
}
.nav-link {
  display: block;
}
</style>