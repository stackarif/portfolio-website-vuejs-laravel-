import { createRouter, createWebHistory } from "vue-router";
//admin
import homeAdminIndex from '../components/admin/home/index.vue';
import adminAboutIndex from '../components/admin/about/index.vue';
import adminServiceIndex from '../components/admin/services/index.vue';
import adminSkillIndex from '../components/admin/skills/index.vue';
import adminEducationIndex from '../components/admin/educations/index.vue';
import adminExperianceIndex from '../components/admin/experiance/index.vue';
//pages
import homePageIndex from '../components/pages/home/index.vue';
//login
import login from '../components/auth/login.vue';


import notFound from '../components/notFound.vue';

const routes = [
    // admin
    {
        path: '/admin/home',
        name: 'adminHome',
        component: homeAdminIndex,
        meta:{
            requiresAuth: true
        }
    },
    {
        path: '/admin/about',
        name: 'adminAbout',
        component: adminAboutIndex,
        meta:{
            requiresAuth: true
        }
    },
    {
        path: '/admin/services',
        name: 'adminService',
        component: adminServiceIndex,
        meta:{
            requiresAuth: true
        }
    },
    {
        path: '/admin/skills',
        name: 'adminSkill',
        component: adminSkillIndex,
        meta:{
            requiresAuth: true
        }
    },
    {
        path: '/admin/educations',
        name: 'adminEducation',
        component: adminEducationIndex,
        meta:{
            requiresAuth: true
        }
    },
    {
        path: '/admin/experiances',
        name: 'adminExperiance',
        component: adminExperianceIndex,
        meta:{
            requiresAuth: true
        }
    },
    //pages
    {
        path: '/',
        name: 'Home',
        component: homePageIndex,
        meta:{
            requiresAuth: false
        }
    },
    //login
    {
        path: '/login',
        name: 'Login',
        component: login,
        meta:{
            requiresAuth: false
        }
    },

    //not found
    {
        path: '/:pathMatch(.*)*',
        name: 'notFound',
        component: notFound,
        meta:{
            requiresAuth: false
        }

    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

router.beforeEach((to, from) =>{
    if(to.meta.requiresAuth && !localStorage.getItem('token')){ 
        return {name: 'Login'}

    }

    // if(to.meta.requiresAuth == false && localStorage.getItem('token')){
    //     return {name: 'adminHome'}

    // }
})

export default router