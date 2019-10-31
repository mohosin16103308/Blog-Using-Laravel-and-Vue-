import AdminHome from './components/admin/AdminHome.vue';
import Example from './components/ExampleComponent.vue';
import CatList from './components/admin/category/List.vue';
import AddCategory from './components/admin/category/AddCategory.vue';
import EditCategory from './components/admin/category/EditCategory.vue';




export const routes = [
    {
       path: '/home',
       component: AdminHome
    },
    {
      path : '/posts',
      component : Example
    },
    {
      path : '/categories',
      component : CatList
    },
    {
      path : '/add-category',
      component : AddCategory
    },

    {
      path : '/edit/category/:id',
      component : EditCategory

    },
 
  ]