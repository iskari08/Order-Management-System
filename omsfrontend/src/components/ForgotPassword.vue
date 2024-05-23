<template>
    <div class="flex justify-center items-center h-screen">
      <div class="flex flex-col items-center">
        <div class="flex justify-center items-center mb-8">
          <img src="../assets/OrderManagement.png" alt="Order Management System Logo" class="w-96 h-96 mb-4">
          <form @submit.prevent="authStore.handleForgotPassword(email)" class="bg-transparent px-8 py-6 rounded-lg shadow-2xl max-w-md ml-[50px]">
            <h2 class="text-center text-xl font-semibold mb-4 font-archivo">Forgot Password</h2>
            <div class="m-2 p-2 text-green-900 font-semibold bg-green-300 rounded-md" v-if="authStore.status">
                {{ authStore.status }}
            </div>
            <div class="flex items-center py-2">
              <label class='relative cursor-pointer'>
                <input type="email" placeholder="Input" v-model="email" class="h-12 w-96 px-6 text-lg sm:text-lg text-black bg-transparent border-gray-500 border-2 rounded-lg border-opacity-50 outline-none focus:border-blue-500 placeholder-gray-300 placeholder-opacity-0 transition duration-200" />
                <span class='text-lg px-2 text-opacity-80 bg-white absolute left-5 top-2.5 focus:transition duration-200 input-text font-archivo'>Email</span>
                <div v-if="authStore.errors.email">
                  <span class="text-red-400 text-sm m-2">{{ authStore.errors.email[0] }}</span>
                </div>
              </label>
            </div>
            <button type="submit" class="btn-primary mt-4 w-full font-archivo">Send Reset Link</button>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { useAuthStore } from '../stores/auth';

  const authStore = useAuthStore();
  const email = ref('');
  </script>
  
  <style lang="css">
  body {
    background-color: white;
  }
  
  .error {
    border-color: red;
  }
  
  .error-message {
    color: red;
    font-size: small;
  }
  
  .btn-primary {
    background-color: #0486dc;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
  }
  
  .btn-primary:hover {
    background-color: #0172bd;
  }
  </style>
  