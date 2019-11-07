<template>
  <div>
    <!-- Main content -->
    <section class="content">
      <center class="center text-primary">
        <h1>Post List</h1>
        <h1>
          <router-link to="/add-post" class="btn btn-primary">ADD NEW</router-link>
        </h1>
      </center>
    <div class="card">
            <div class="card-header">
           
                
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
   <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                   <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 277.95px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 358.783px;" aria-label="Browser: activate to sort column ascending">Name</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 358.783px;" aria-label="Browser: activate to sort column ascending">ategory Name</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 172.717px;" aria-label="CSS grade: activate to sort column ascending">ACTION</th></tr>
                </thead>
                <tbody>
             <tr v-for="item in getVueItems()" role="row" class="odd">
                <td>{{ item.id }}</td>
                <td>{{ item.title }}</td>
              <td v-if="item.category">{{ item.category.cat_name }}</td>
              <td v-else>No Cat</td>
                <td><router-link  :to="`/edit/post/${item.id}`"  class="btn btn-primary">Edit</router-link> ||  <a href="" @click.prevent="deleteCat(item.id)">DELETE</a></td>
              </tr>

                </tbody>
                <tfoot>
                </tfoot>
              </table>
              </div></div>
              </div>
            </div>
            <!-- /.card-body -->
         
          </div>
    </section>
  </div>
</template>
<script>
export default {

 computed: {

     getAllposts(){

      store.dispatch("allPostList");

     },
  },
  methods: {

    getVueItems() {
            store.dispatch("allPostList");
        // state.items = store.getters.getCategories;
        return store.getters.getPosts;

    },

    deleteCat(id){
      axios.get("/delete/category/"+id).then(function(response) {
            //    console.log(response.status);
            if(response.status == 200){
                      store.dispatch("allCategoryList");

            }
            });
    },
    editCat(){
axios.get("/edit/category/"+id).then(function(response) {
            //    console.log(response.status);
            if(response.status == 200){
                      // store.dispatch("allCategoryList");

            }
            });
    },
  }
};
</script>

     
