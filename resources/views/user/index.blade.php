@extends('layouts.app')

@section('content')
@include('utilities.datatableStyle')
@include('utilities.datatableScripts')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>User <small>User & statistics</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ url('/home') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>User Management</span>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>User</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="row">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Users
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload" onclick="setDataTable_datatable_USERS()"></a>
                            {{ Util::downloadLink('datatable_USERS')}}
                        </div>
                    </div>
                    <div class="portlet-body">
                        @php

                        $button = '<button class="btn green" onclick="window.location.replace(\''.route('user.create' ) .'\')">Add New</button>';
                        @endphp
                        {{ Util::datatable('datatable_USERS', 'user-ajax', $button??'') }}
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection

@section('custom_scripts')
<script>
    function datatable_USERS_Settings() {
        $('#datatable_USERS').removeClass('table-hover');
        var ret = {};
        ret['columnDefs'] = [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: 1 },
            { responsivePriority: 3, targets: 2 },
            { responsivePriority: 4, targets: 3 },
            { className: 'dt-center', targets: [1] },
            { orderable: false, targets: [0, 4] },
            { orderable: false, targets: [1] }

        ];

        ret['order'] = [ [1, "asc"] ];

        ret['responsive'] = {
            'details': {
                renderer: function (api, rowIdx, columns) {
                    var data = $.map(columns, function (col, i) {
                        return col.hidden ?
                            '<tr data-dt-row="' + col.rowIndex + '" data-dt-column="' + col
                            .columnIndex + '">' +
                            '<th>' + col.title + '</th> ' +
                            '<th>:</th>' +
                            '<td>' + col.data + '</td>' +
                            '</tr>' : '';
                    }).join('');
                    return data ? $('<table/>').append(data) : false;
                }
            }
        };

        return ret;
    }

function resetPassword( url )
{
    $.ajax({
        dataType: 'json',
        url: url,
        beforeSend: function (xhr) {
            App.blockUI({
                target: '#datatable_USERS_wrapper',
                animate: true
            });
        }
    }).done(function (data) {
        if (data.status == 200)
            bootbox.alert({
                message: data.message,
            });
        else
            toastr.error(data.message, "Error");
    }).always(function () {
        App.unblockUI('#datatable_USERS_wrapper');
    });
}
function datatable_USERS_Inputs() {
                    var ret = {};

                    ret['user_cell_id'] ="{{ $user_cell_id??''}}";
                    return ret;
                }

function deleteMe(id)
    {
        bootbox.confirm({
            message: "Are you sure to delete this item?",
            size: 'small',
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result == true)
                $.ajax({
                    method: 'get',
                    dataType: 'json',
                    data: {choice:result},
                    url: "{{ url('user-delete') }}/"+id,
                    beforeSend: function (xhr) {
                        App.blockUI({
                            target: '.portlet-body',
                            animate: true
                        });
                    }
                }).done(function (data) {
                    if(data.status == 200) {
                        toastr.success('Success', data.message);
                        window.location.replace("{{ url('/user') }}");
                    }

                }).always(function() {
                    App.unblockUI('.portlet-body');
                });
            }
        });
    }

</script>

@stop
