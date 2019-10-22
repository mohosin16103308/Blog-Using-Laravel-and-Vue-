import AdminHome from './components/admin/AdminHome.vue';
import Example from './components/ExampleComponent.vue';


export const routes = [
    {
       path: '/home',
       component: AdminHome

    },
    {
    path : '/posts',
    component : Example
    },
    
  ]