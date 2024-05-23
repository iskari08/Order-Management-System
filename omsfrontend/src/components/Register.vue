<script setup>
import { ref } from 'vue';
import { useAuthStore } from '../stores/auth';

const authStore = useAuthStore();

const form = ref ({
  name: '',
  email: '',
  password: '',
  password_confirmation: ''
});
</script>

<template>
  <div class="flex justify-center items-center h-screen">
    <div class="flex items-center">
      <div class="ml-8">
        <h1 class="text-2xl font-archivo font-bold mb-2">Welcome to Order Management System</h1>
        <p class="text-center mb-2 font-archivo text-stone-500">Efficiency Elevated: Order Management Made Simple!</p>
      </div>
      <div class="bg-transparent px-8 py-6 rounded-lg shadow-2xl max-w-md ml-[50px]">
        <h2 class="text-center text-xl font-semibold mb-4 font-archivo">Create an Account</h2>
        <form @submit.prevent="authStore.handleRegister(form)">
        <div class="flex items-center py-2">
          <label class='relative cursor-pointer'>
            <input type="text" placeholder="Name" v-model="form.name" class="h-12 w-96 px-6 text-lg sm:text-lg text-black bg-transparent border-gray-500 border-2 rounded-lg border-opacity-50 outline-none focus:border-blue-500 placeholder-gray-300 placeholder-opacity-0 transition duration-200" />
            <span class='text-lg px-2 text-opacity-80 bg-white absolute left-5 top-2.5 focus:transition duration-200 input-text'>Name</span>
            <div v-if="authStore.errors.name">
                <span class="text-red-400 text-sm m-2">{{ authStore.errors.name[0] }}</span>
              </div>
          </label>
        </div>
        <div class="flex items-center py-2">
          <label class='relative cursor-pointer'>
            <input type="email" placeholder="Email" v-model="form.email" class="h-12 w-96 px-6 text-lg sm:text-lg text-black bg-transparent border-gray-500 border-2 rounded-lg border-opacity-50 outline-none focus:border-blue-500 placeholder-gray-300 placeholder-opacity-0 transition duration-200" />
            <span class='text-lg px-2 text-opacity-80 bg-white absolute left-5 top-2.5 focus:transition duration-200 input-text'>Email</span>
            <div v-if="authStore.errors.email">
                <span class="text-red-400 text-sm m-2">{{ authStore.errors.email[0] }}</span>
            </div>
          </label>
        </div>
        <div class="flex items-center py-2">
          <label class='relative cursor-pointer'>
            <input type="password" placeholder="Password" v-model="form.password" class="h-12 w-96 px-6 text-lg sm:text-lg text-black bg-transparent border-gray-500 border-2 rounded-lg border-opacity-50 outline-none focus:border-blue-500 placeholder-gray-300 placeholder-opacity-0 transition duration-200" />
            <span class='text-lg px-2 text-opacity-80 bg-white absolute left-5 top-2.5 focus:transition duration-200 input-text'>Password</span>
            <div v-if="authStore.errors.password">
                <span class="text-red-400 text-sm m-2">{{ authStore.errors.password[0] }}</span>
            </div>
          </label>
        </div>
        <div class="flex items-center py-2">
          <label class='relative cursor-pointer'>
            <input type="password" placeholder="Confirm Password" v-model="form.password_confirmation" class="h-12 w-96 px-6 text-lg sm:text-lg text-black bg-transparent border-gray-500 border-2 rounded-lg border-opacity-50 outline-none focus:border-blue-500 placeholder-gray-300 placeholder-opacity-0 transition duration-200" />
            <span class='text-lg px-2 text-opacity-80 bg-white absolute left-5 top-2.5 focus:transition duration-200 input-text'>Confirm Password</span>
            <div v-if="authStore.errors.password">
                <span class="text-red-400 text-sm m-2">{{ authStore.errors.password[0] }}</span>
            </div>
          </label>
        </div>
        <button type="submit" class="btn-primary mt-4 w-full font-archivo">Submit</button>
      </form>
      </div>
    </div>
  </div>
</template>

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
