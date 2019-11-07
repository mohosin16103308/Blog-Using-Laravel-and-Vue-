import AdminHome from './components/admin/AdminHome.vue';

import CatList from './components/admin/category/List.vue';
import AddCategory from './components/admin/category/AddCategory.vue';
import EditCategory from './components/admin/category/EditCategory.vue';

import Posts from './components/admin/post/List.vue';
import AddPost from './components/admin/post/AddPost.vue';



export const routes = [
    {
       path: '/home',
       component: AdminHome
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

    // Post 
    {
      path : '/posts',
      component : Posts
    },
    {
      path : '/add-post',
      component : AddPost
    }
 
  ]