<style type="text/css">
    .modal-dialog{
        max-width: 800px;
        margin: 1.75rem auto;
    }
    .modal-content{
        width: 800px;
    }
    .modal-body{
        display: flex;
        flex-direction: row;
    }
    .modal-body > .form-group{
        flex: 1;
        padding: 5px;
    }
</style>
<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Who We Are</h3>

                    <div class="card-tools">
                      
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addNew">
                          <i class="fa fa-plus-square"></i>
                          Add New
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Description</th>
                          <!-- <th>Photo</th> -->
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr v-for="record in records.data" :key="record.id">
                          <td>{{record.id}}</td>
                          <td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Who We Are Management Panel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="createProduct">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>English Version</label>
                                <textarea id="editor1" class="ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                                <label>বাংলায় লিখুন</label>
                                <textarea id="editor1" class="ckeditor"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
      </section>
</template>

<script>
    export default {
        data () {
            return {
                records: {}
            }
        },
        methods: {
          loadCategories(){
            // if(this.$gate.isAdmin()){
              // axios.get("api/category").then(({ data }) => (this.categories = data.data));
            // }
          },
          
          createCategory(){
              
          }
        },
        mounted(){
            
        },
        created(){
            var editor = CKEDITOR.replace( 'editor1' );
            CKFinder.setupCKEditor( editor );
            this.loadCategories();        
        }
    }
</script>
