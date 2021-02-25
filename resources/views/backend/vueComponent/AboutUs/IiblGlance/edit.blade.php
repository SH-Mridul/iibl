<style type="text/css">
    .form-group {
        margin-bottom: 0rem;
    }
</style>

<p class="error_txt" tabindex="0"></p>
<div class='modal-body'>
    <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $record->id }}">
    <div class='form-group'>
        <label>English Version</label>
        <textarea id='english' class='ckeditor'>{{ $record->english }}</textarea>
    </div>
    <div class='form-group'>
        <label>বাংলায় লিখুন</label>
        <textarea id='bangla' class='ckeditor'>{{ $record->bangla }}</textarea>
    </div>
</div>
<div class='modal-footer'>
    <button type='button' class='btn btn-secondary' onclick=
    "
        (function(){
            dashboard.populateDataTable();
        })(); return false;
    ">Back</button>
    <button type='button' class='btn btn-primary' onclick=
    "
        (function(){
            if(CKEDITOR.instances.english.getData() == ''){
                vueCli.error_txt('please enter content english version',CKEDITOR.instances.english);
            }
            else if(CKEDITOR.instances.bangla.getData() == ''){
                vueCli.error_txt('দয়া করে কন্টেন্টি বাংলায় লিখুন ',CKEDITOR.instances.bangla);
            }
            else{
                var postParams = {
                    postType: 'update',
                    id: $('input[name=id]').val(),
                    english: CKEDITOR.instances.english.getData(),
                    bangla: CKEDITOR.instances.bangla.getData()
                };
                dashboard.storeOrUpdate(postParams);
            }
        })();return false;
    ">Update</button>
</div>


<script type="text/javascript">
    setTimeout(function(){ CKEDITOR.replace( 'english' ); },1);
    setTimeout(function(){ CKEDITOR.replace( 'bangla' ); },1);
</script>