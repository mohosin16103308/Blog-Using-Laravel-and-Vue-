
export default {

    state: {
        categories :  [],
        posts : [],
    },
    getters: {
        getCategories(state){
            return state.categories;
        },


        //Get Posts 
        getPosts(state){
            return state.posts;
        }
    },
    actions: {
        // All Categories 
        allCategoryList(context){
            axios.get("/list/category").then(function(response) {
                context.commit('categories',response.data.categories)
            });
         
        },
       
        // Posts List
        allPostList(context){
            axios.get("/list/posts").then(function(response) {
                context.commit('posts',response.data.posts)
            });
        },

    },
    mutations: {
        categories(state,data){
            return state.categories = data;
        },

//Posts
        posts(state,data){

            return state.posts = data;
        }
    },

}