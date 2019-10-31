<template>
  <div>
    <!-- Main content -->
    <section class="content">
      <center class="center text-primary">
        <h1>Edit Category</h1>
      </center>
      <div class="row justify-content-around">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body" style="width:500px">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <p id="s"></p>

              <form @submit.prevent="updateCategory" @keydown="form.onKeydown($event)">
                <div class="form-group">
                  <label>Category Name</label>
                  <input
                    v-model="form.cat_name"
                    type="text"
                    name="cat_name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('cat_name') }"
                  />
                  <has-error :form="form" field="cat_name"></has-error>
                </div>


                <button :disabled="form.busy" type="submit" class="btn btn-primary">Add Category</button>
              </form>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </section>
  </div>
</template>
<script>

export default {


  
  data () {
    return {
      // Create a new form instance
      form: new Form({
        cat_name: '',
      })
    }
  },

  methods: {
    updateCategory () {
      // Submit the form via a POST request
      this.form.post('/add/category')
        .then(({ data }) => { 
            console.log(data) 
            document.getElementById('s').textContent="Data Successfully Save";
            })
        .catch(()=>{
                       document.getElementById('s').textContent="Solve Error";

        });
        store.dispatch("allCategoryList");
    }
  }
  
};
</script>
