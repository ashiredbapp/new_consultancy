{{-- page level styles --}}

<table class="table table-striped table-bordered table-hover dt-responsive nowrap" width="100%" id="{{ $tableId }}">

</table>

<span id="searchIconContainer_{{ $tableId }}" class="hide">

    {!! $actionInput !!}
    <?php if( $tableId === 'datatable_TMS_NEW_CONFIG') { ?>
    <div onclick="$('#bulkContainer').show();$('#searchContainer').hide();" class="btn-group margin-left-5" style="cursor:pointer">
        <button class="btn green"><i class="fa fa-server"></i> Bulk Edit</button>
    </div>
    <div onclick="$('#searchContainer').show();$('#bulkContainer').hide();" class="btn-group searchTable float-right margin-left-5" style="cursor:pointer">
    <?php } else { ?>
    <div id="searchIcon_{{ $tableId }}" class="btn-group searchTable float-right margin-left-5" style="cursor:pointer" data-src="searchModel_{{ $tableId }}">
    <?php } ?>
        <button class="btn green"><i class="fa fa-search"></i> Search</button>
    </div>
</span>

<div class="modal fade" id="searchModel_{{ $tableId }}" role="basic" aria-hidden="true" style="display: none;color:#000">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close searchModelClose" title="Close"></button>
                <h4 class="modal-title">Search</h4>
            </div>
            <div class="modal-body">
                <div class="searchConditions" id="searchConditions{{ $tableId }}">

                </div>
                <div class="seachConditionAdd col-md-12 text-center" style="padding-top:8px;cursor:pointer"><i class="fa fa-plus"></i> Add Condition</div>

                <div class="searchConditionBack hide">
                    <div class="conditionContainer">
                        <div class="row">
                            <div class="col-md-5">
                                <select class="searchColumn form-control input-medium" data-placeholder="Choose Column">

                                </select>
                            </div>
                            <!--	<div class="col-md-1 text-center" style="padding-top:8px">&nbsp;&nbsp;&nbsp;Like</div>-->
                            <div class="col-md-5">
                                <input type="text" class="searchValue form-control input-medium" placeholder="Search Value" />
                            </div>
                            <div class="col-md-1 text-center" style="padding-top:8px">
                                <i class="fa fa-trash searchConditionRemove"  style="cursor:pointer" title="Remove"></i>
                            </div>
                        </div><br>
                    </div>
                </div>
                <br/><br/>
            </div>
            <div class="modal-footer">
                <button type="button" id="searchReset{{ $tableId }}" class="btn red searchModelReset" >Reset</button>
                <button type="button" id="searchApply{{ $tableId }}" class="btn green searchFilterApply" onclick="setDataTable_{{ $tableId }}()">Apply</button>
            </div>
        </div>
    </div>
</div>


@section('custom_scripts')
@parent
<script>
$(document).ready(function(){
    setDataTable_{{ $tableId }}();
    $.fn.dataTable.ext.errMode = 'none';
    $('#{{ $tableId }}').on('error.dt', function(e, settings, techNote, message) { console.log( 'An error occurred: ', message); });
});
var {{ $tableId }}_table = '';
function setDataTable_{{ $tableId }}() {

    var intialData = datatableInputs_{{ $tableId }}();
    intialData['getSettings'] = 1;
    $.ajax({
        url:'{!! url($srcUrl) !!}',
        data : intialData,
        method: "{{ in_array( $tableId, ['datatable_NON_SWITCH_TRANSACTIONS'] )?'POST':'GET' }}",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        beforeSend:function(){
            if ({{ $tableId }}_table instanceof $.fn.dataTable.Api) {
                {{ $tableId }}_table.destroy();
                $("#{{ $tableId }}").html('');
            }
            App.blockUI({
                target: '#{{ $tableId }}',
                animate: true
            });
        },
        success:function(rst){
            var country = "{{ session('active_country') }}";
            var columns = [];
            $.each(rst.columns,function(key,value){
                columns.push({'data':key,'title':value});
            })
            var searchFields = '<option value=""></option>';
            $.each(rst.searchFields,function(key,value){
                searchFields = searchFields+'<option value="'+key+'">'+value+'</option>';
            })
            if( rst.dates !== undefined )
            {
                $('[name="from_date"]').val(rst.dates[0]);
                $('[name="to_date"]').val(rst.dates[1]);
            }
            $("#searchModel_{{ $tableId }}").find('.searchConditionBack').find('.searchColumn').html(searchFields);

            var settings = {}
            settings['responsive'] = false;
            settings['serverSide'] = true;
            settings['destroy'] = true;
            settings['pagingType'] = "bootstrap_full_number";
            settings['ajax'] = {
                url :'{!! url($srcUrl) !!}',
                method: "{{ in_array( $tableId, ['datatable_NON_SWITCH_TRANSACTIONS'] )?'POST':'GET' }}",
                data: datatableInputs_{{ $tableId }}(),
                complete:function(rst){
                    if(rst.responseJSON.downloadUrl != '')
                    $(".export_link[data-id='{{ $tableId }}']").attr('data-src',rst.responseJSON.downloadUrl)
                    App.unblockUI('#{{ $tableId }}');
                },
                beforeSend:function(){
                    $("#{{ $tableId}}_wrapper").find(".dataTables_filter").html($("#searchIconContainer_{{ $tableId }}").html());
                    if( rst.dates !== undefined )
                    {
                        $("#{{ $tableId}}_wrapper").find(".dataTables_filter").addClass('pull-right');
                        $("#{{ $tableId}}_wrapper").find(".dataTables_filter").parent().removeClass('col-md-6').addClass('col-md-9');
                        $("#{{ $tableId}}_wrapper").find("#datatable_EPICS_length").parent().removeClass('col-md-6').addClass('col-md-3');
                    }
                    App.blockUI({
                        target: '#{{ $tableId }}',
                        animate: true
                    });
                }
            };
            settings['columns'] = columns;
            settings['drawCallback'] = function () {
                $('.popovers').popover().on('shown.bs.popover', function() {
                    $(document).find('.popover-content').css('overflow-wrap','break-word');
                });
                $(".tooltips").tooltip();
                setTimeout(function(){
                    $(".DTFC_LeftBodyLiner").css("top","-11px")
                },100);
            };

            settings['infoCallback'] =  function(settings, start, end, max, total, pre){
                if(total == 0)
                    return "0 records found"
                else
                    return "Showing " + getLocaleFormat( start, "{{ session('active_country') }}") + " to " + getLocaleFormat(end, "{{ session('active_country') }}") + " of " + getLocaleFormat( total, "{{ session('active_country') }}") + " entries"
                + ((total !== max) ? " (filtered from " + getLocaleFormat(max, "{{ session('active_country') }}") + " total entries)" : "");
            };

            if (typeof {{ $tableId }}_Settings !== 'undefined' && $.isFunction({{ $tableId }}_Settings)) {
                var tmpSettings = {{ $tableId }}_Settings();
                $.each(tmpSettings,function(key,value){
                    settings[key] = value;
                });
            }
            {{ $tableId }}_table = $('#{{ $tableId }}').DataTable(settings);

        }
    })
};

if(!$.isFunction(searchModelSettings_{{ $tableId }})) {
    function searchModelSettings_{{ $tableId }}(){
        $(document).on('click',"#searchIcon_{{ $tableId }}",function(){
            $("#searchModel_{{ $tableId }}").modal({
                backdrop: 'static',
                keyboard: false
            });
            if( $("#searchModel_{{ $tableId }} .searchConditions .conditionContainer").length  == 0){
                val = '';
                $("#searchModel_{{ $tableId }} .searchColumn").find("option").each(function(){
                    if( $(this).text() == 'Terminal ID') val = $(this).val();
                });
                $("#searchModel_{{ $tableId }} .seachConditionAdd").click();
                $("#searchModel_{{ $tableId }} .searchColumn").val(val).trigger('change')
            }
        })

        $(document).on('keypress',".searchValue", function(e){
            if(e.which == 13)
                $('#searchModel_{{ $tableId }}').find("#searchApply{{ $tableId }}").click();
        })
    }
    function datatableInputs_{{ $tableId }}(){
        var ret = {};
        ret['csrf_token'] = $('meta[name=csrf_token]').attr("content");
        ret['searchData'] = searchData('{{ $tableId }}');
        if (typeof {{ $tableId }}_Inputs !== 'undefined' && $.isFunction({{ $tableId }}_Inputs)) {
            $.each({{ $tableId }}_Inputs(),function(key,value){
                ret[key] = value;
            });
        }
        return ret;
    }
    $(document).ready(function(){
        searchModelSettings_{{ $tableId }}();
    });
}

function getLocaleFormat( value, portal )
{
    if ( portal == 'INDIA' )
    return  parseFloat(value).toLocaleString('en-IN');
    else
    return  parseFloat(value).toLocaleString('en-US');
}
</script>
<!-- datatable -->
@stop
