<div class="info-div" style="margin-bottom: 10px;">
  <div></div>
  <div style="display: flex;flex-direction: row; align-items: center;">
    <span>search:&nbsp;&nbsp;</span>
    <input type="text" name="search" class="form-control" autocomplete="off" value="{{ $data['search'] }}" style="height: 27px;border-radius: 0px;" onkeyup=
    "
      (function(){
        if($('input[name=search]').val() == ''){
          dashboard.search = '';
          dashboard.populateDataTable();
        }
      })(); return false;
    ">
    <button class="btn btn-secondary" onclick=
    "
      (function(){
        dashboard.currentpage = 1;
        dashboard.search = $('input[name=search]').val();
        dashboard.populateDataTable();
        return false;
      })(); return false;
    ">Search</button>
  </div>
</div>
<div class="table-responsive p-0 container_table">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>English</th>
        <th>Bangla</th>
      </tr>
    </thead>
    <tbody>
      @if(count($data['records']) == 0)
      <tr>
        <td colspan="2" class="noRecordFound">No record found</td>
      </tr>
      @endif
      @foreach($data['records'] as $record)
       <tr class="noHover">
        <td>{!! $record->english !!}</td>
        <td>{!! $record->bangla !!}</td>
      </tr>
      <tr class="noHover noRecord">
        <td colspan="2">
          <div align="center">
            <button class="btn btn-success" onclick=
            "
              (function(){
                dashboard.editVueTemplete(<?php echo $record->id; ?>);
                return false;
              })(); return false;
            ">edit</button>
            <button class="btn btn-danger" onclick=
            "
              (function(){
                dashboard.delete(<?php echo $record->id; ?>);
                return false;
              })(); return false;
            ">delete</button>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="info-div">
  <div>Total Record: {{ $data['total'] }}</div>
  <div style="display: flex;flex-direction: row;justify-content: flex-end;">
    <div id="pagination"></div>
  </div>
</div>

<script type="text/javascript">
  dashboard.add_btn = <?php echo count($data['records']) == 0 ? 'true' : 'false'?>;
  // populate pagination
  $('#pagination').pagination({
      currentPage: <?php echo $data['currentpage']; ?>,
      pages: <?php echo $data['pages']; ?>,
      displayedPages: <?php echo $data['currentpage']; ?>,
      prevText:"Prev",
      nextText:"Next",
      cssStyle: 'light-theme',
      displayedPages: 3,
      edges: 3,
      onPageClick:function(pageNumber, event){
          dashboard.currentpage = pageNumber;
          dashboard.start = (pageNumber - 1) * dashboard.limit;
          dashboard.populateDataTable(); 
      }
  });
</script>