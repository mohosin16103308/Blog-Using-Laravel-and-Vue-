<template>
  <div>
    <!-- Main content -->
    <section class="content">
      <center class="center text-primary">
        <h1>Add New Posts</h1>
      </center>
      <div class="row justify-content-around">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body" style="width:500px">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <p id="s"></p>

              <form @submit.prevent="addCategory" @keydown="form.onKeydown($event)">
                <div class="form-group">
                  <label>Post Title</label>
                  <input
                    v-model="form.cat_name"
                    type="text"
                    name="title"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('title') }"
                  />
                  <has-error :form="form" field="title"></has-error>
                </div>


                <button :disabled="form.busy" type="submit" class="btn btn-primary">Add Posts</button>
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
    addCategory () {
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
