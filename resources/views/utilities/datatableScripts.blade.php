@section('custom_scripts')
@parent

<script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js') }}"></script>
<script>

if( $(".searchConditions .conditionContainer").length  == 0){
      val = '';
      $(".searchColumn").find("option").each(function(){
        if( $(this).text() == 'Terminal ID') val = $(this).val();
      });
      $(".seachConditionAdd").click();
      $(".searchColumn").val(val).trigger('change')
}
$(document).on("change",".searchColumn",function(){
   $(this).closest(".row").find(".searchValue").val('');
});
$(document).on("click",".searchModelClose",function(){
  $(this).closest(".modal").modal("hide");
});
$(document).on("click",".seachConditionAdd",function(){
  $(this).closest(".modal-body").find(".searchConditions").append($(this).closest(".modal-body").find(".searchConditionBack").html());
  $(this).closest(".modal-body").find(".searchConditions .searchColumn").select2({});
});
$(document).on("click",".searchConditionRemove",function(){
  $(this).closest(".conditionContainer").remove();
});
$(document).on("click",".searchModelReset",function(){
  $(this).closest(".modal").find(".searchConditions").find(".searchConditionRemove").trigger("click");
});
function searchData(tableId){
    $(".searchModelClose").trigger("click");
    var data = {};
    $("#searchConditions"+tableId+"").find(".searchColumn").each(function(){
      if( Object.prototype.toString.call( data[$(this).val()] ) !== '[object Array]' ) {
        data[$(this).val()] = [];
      }
      if($(this).val() != '')
        data[$(this).val()].push($(this).closest(".row").find(".searchValue").val());
    });
    return data;
}
</script>
@endsection
