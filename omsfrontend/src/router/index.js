import { createRouter, createWebHistory } from "vue-router"

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('../components/Login.vue')
        },
        {
            path: '/signup',
            component: () => import('../components/Register.vue')
        },
        {
            path: '/dashboard',
            component: () => import('../components/Dashboard.vue')
        },
        {
            path: '/order',
            component: () => import('../components/Orders.vue')
        },
        {
            path: '/usermgt',
            component: () => import('../components/Users.vue')
        },
        {
            path: '/forgot-password',
            component: () => import('../components/ForgotPassword.vue')
        },
        {
            path: '/password-reset/:token',
            component: () => import('../components/ResetPassword.vue')
        },
    ]
})

export default router