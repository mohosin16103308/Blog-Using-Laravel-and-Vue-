<template>
  <div>
    <!-- Main content -->
    <section class="content">
      <center class="center text-primary">
        <h1>Category List</h1>
        <h1>
          <router-link to="/add-category" class="btn btn-primary">ADD NEW</router-link>
        </h1>
      </center>
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example" class="display" style="width:100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in items">
                <td>{{ item.cat_name }}</td>
                <td><a href="#">EDIT</a> || <a href="#">DELETE</a></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
  </div>
</template>
<script>
export default {
  data() {
    return {
      // Create a new form instance
      form: new Form({
        cat_name: ""
      }),
      items: []
    };
  },
 mounted: function mounted() {
    this.getVueItems();
  },
  methods: {
    getVueItems() {
      var _this = this;

      axios.get("/list/category").then(function(response) {
        _this.items = response.data;
      });
    }
  }
};
</script>
