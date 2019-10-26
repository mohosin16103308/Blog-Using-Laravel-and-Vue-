
export default {

    state: {
        categories :  []
    },
    getters: {
        getCategories(state){
            return state.categories;
        }
    },
    actions: {
        allCategoryList(context){
            axios.get("/list/category").then(function(response) {
                context.commit('categories',response.data.categories)
            });
         
        }
    },
    mutations: {
        categories(state,data){
            return state.categories = data;
        }
    },

}