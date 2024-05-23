<template>
    <div class="flex justify-center items-center h-screen">
      <div class="flex items-center">
        <div class="ml-8">
          <h1 class="text-2xl font-archivo font-bold mb-2">Reset Your Password</h1>
          <p class="text-center mb-2 font-archivo text-stone-500">Enter your new password below to reset it.</p>
        </div>
        <div class="bg-transparent px-8 py-6 rounded-lg shadow-2xl max-w-md ml-[50px]">
          <form @submit.prevent="authStore.handleResetPassword(form)">
            <h2 class="text-center text-xl font-semibold mb-4 font-archivo">Reset Password</h2>
            <div class="m-2 p-2 text-green-900 font-semibold bg-green-300 rounded-md" v-if="authStore.status">
                {{ authStore.status }}
            </div>
            <div class="flex items-center py-2">
              <label class='relative cursor-pointer'>
                <input type="password" placeholder="New Password" v-model="form.password" class="h-12 w-96 px-6 text-lg sm:text-lg text-black bg-transparent border-gray-500 border-2 rounded-lg border-opacity-50 outline-none focus:border-blue-500 placeholder-gray-300 placeholder-opacity-0 transition duration-200" />
                <span class='text-lg px-2 text-opacity-80 bg-white absolute left-5 top-2.5 focus:transition duration-200 input-text'>New Password</span>
                <div v-if="authStore.errors.password">
                  <span class="text-red-400 text-sm m-2">{{ authStore.errors.password[0] }}</span>
                </div>
              </label>
            </div>
            <div class="flex items-center py-2">
              <label class='relative cursor-pointer'>
                <input type="password" placeholder="Confirm New Password" v-model="form.password_confirmation" class="h-12 w-96 px-6 text-lg sm:text-lg text-black bg-transparent border-gray-500 border-2 rounded-lg border-opacity-50 outline-none focus:border-blue-500 placeholder-gray-300 placeholder-opacity-0 transition duration-200" />
                <span class='text-lg px-2 text-opacity-80 bg-white absolute left-5 top-2.5 focus:transition duration-200 input-text'>Confirm New Password</span>
                <div v-if="authStore.errors.password_confirmation">
                  <span class="text-red-400 text-sm m-2">{{ authStore.errors.password_confirmation[0] }}</span>
                </div>
              </label>
            </div>
            <button type="submit" class="btn-primary mt-4 w-full font-archivo">Reset Password</button>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
    import { useAuthStore } from "../stores/auth";
    import { ref } from "vue";
    import { useRoute } from "vue-router";

    const route = useRoute();
    const authStore = useAuthStore();

    const form = ref({
        password: '',
        password_confirmation: '',
        email: route.query.email,
        token: route.params.token,
    })
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
  