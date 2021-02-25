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
<section class="content" id="dashboard">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">iibl at a glance</h3>
                <div class="card-tools">
                  <button v-if="add_btn" type="button" class="btn btn-sm btn-primary" onclick="dashboard.addVueTemplete()">
                      <i class="fa fa-plus-square"></i>
                      Add New
                  </button>
                </div>
              </div>
              <div class="card-body" id="extraVueContainer"></div>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid" id="dynamicContainer"></div>
  </section>

<script>
  var dashboard = new Vue({
    el: '#dashboard',
    data(){
        return {
          add_btn: false,
          currentpage : 1,
          limit: 5,
          order: 'asc',
          search: ''
         } 
    },
    created: function(){
        this.populateDataTable();
    },
    methods:{
      populateDataTable: function(){
        $("#extraVueContainer").load('admin/aboutus/iibl-glance/list?'+new URLSearchParams(this.$data).toString(),function(responseTxt, statusTxt, xhr){
          if(statusTxt == 'success'){ 
            $('#extraVueContainer').html(responseTxt);
          }
          else if(statusTxt == 'error'){
            console.log('Error: Vue CLI');
          }
        });
      },
      addVueTemplete: function(){
        dashboard.add_btn = false;
        $('#extraVueContainer').load('admin/aboutus/iibl-glance/add',function(responseTxt, statusTxt, xhr){
          if(statusTxt == 'success'){
            $('#extraVueContainer').html(responseTxt);
          }
          else if(statusTxt == 'error'){
            console.log('Error: Vue CLI');
          }
        });
      },
      editVueTemplete: function(id){
        dashboard.add_btn = false;
        $('#extraVueContainer').load('admin/aboutus/iibl-glance/edit?id='+id,function(responseTxt, statusTxt, xhr){
          if(statusTxt == 'success'){
            $('#extraVueContainer').html(responseTxt);
          }
          else if(statusTxt == 'error'){
            console.log('Error: Vue CLI');
          }
        });
      },
      storeOrUpdate: function(postData){
        axios.post('admin/aboutus/iibl-glance/storeOrUpdate', postData)
        .then(function (response) {
            cuteAlert({
                type: 'success',
                title: 'Success Confirmation',
                message: response['data'],
                buttonText: 'Okay'
            });
            dashboard.add_btn = true;
            dashboard.currentpage = 1;
            dashboard.populateDataTable();
        })
        .catch(function (error) {
            console.log(error);
        });
      },
      delete: function(id){
        cuteAlert({
          type: 'question',
          title: 'Confirmation Message',
          message: 'Are you sure to delete this information?',
          cancelText: 'Cancel',
          confirmText: 'Okay'
        }).then((e)=>{
          if ( e == 'confirm'){

          // delete record  
          axios.post('admin/aboutus/iibl-glance/delete', {
              id: id
          })
          .then(function (response) {
              cuteAlert({
                  type: 'success',
                  title: 'Success Confirmation',
                  message: response['data'],
                  buttonText: 'Okay'
              });
              dashboard.add_btn = true;
              dashboard.currentpage = 1;
              dashboard.populateDataTable();
          })
          .catch(function (error) {
              console.log(error);
          });
        } 
        else {
          }
        })
      }
    }
  });
</script>
