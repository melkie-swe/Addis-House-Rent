@extends('admin/layouts/default')


@section('title')
Education
@parent
@stop


@section('header_styles')
<link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/bootstrap-form-editable/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet" >


<script src="{{ asset('assets/global/plugins/pace/pace.min.js') }}"></script>
<link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/pace/themes/pace-theme-flash.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/select2/css/select2.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" >


<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.min.css') }}" rel="stylesheet" >

<link href="{{ asset('assets/global/css/components.css?v=1') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/css/plugins.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/froiden-helper/helper.css?v=2') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" >
@stop



@section('content')

    <!-- BEGIN PAGE HEADER-->
    <div class="page-head">
        <div class="page-title"><h1>
                @lang('pages.leaveApplications.indexTitle')
            </h1></div>
    </div>
    

    <div class="row">
        <div class="col-md-12">

            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div id="load">


            </div>
            <div class="portlet light bordered">

                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="applications">
                        <thead>
                        <tr>
                            <th>@lang('core.id')</th>
                            <th>@lang('core.name')</th>
                            <th>@lang('core.dates')</th>
                            <th>@lang('core.days')</th>
                            <th>@lang('core.leaveTypes')</th>

                            <th>@lang('core.reason')</th>
                            <th>@lang('core.appliedOn')</th>
                            <th>@lang('core.status')</th>
                            <th>@lang('core.actions')</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->

        </div>
    </div>            <!-- END PAGE CONTENT-->


    {{--Reject--}}

    {{--MODAL CALLING--}}
    @include('admin.common.delete')
    @include('admin.common.show-modal')
    {{--MODAL CALLING END--}}

@stop



@section('footer_scripts')
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}"></script>
@include('admin.include.footerjs')



    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/admin/pages/scripts/table-managed.js') }}"></script>
    
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->


    <script>
        var table = $('#applications').dataTable({
            processing: true,
            serverSide: true,
            "aaSorting": [[0, "desc"]],
            {!! $datatabble_lang !!}
            "ajax": "{{ URL::route('admin.admin.leave_applications') }}",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'full_name', name: 'full_name'},
                {data: 'start_date', name: 'start_date'},
                {data: 'days', name: 'days'},
                {data: 'leaveType', name: 'leaveType'},
                {data: 'reason', name: 'reason'},
                {data: 'applied_on', name: 'applied_on'},
                {data: 'application_status', name: 'application_status'},
                {data: 'edit', name: 'edit'},
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            "sPaginationType": "full_numbers",
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                var oSettings = this.fnSettings();
                $("td:first", nRow).html(oSettings._iDisplayStart + iDisplayIndex + 1);
                return nRow;
            }

        });


        function del(id) {

            $('#deleteModal').modal('show');

            $("#deleteModal").find('#info').html("@lang("messages.leaveApplicationDeleteConfirm")");
            $('#deleteModal').find("#delete").off().click(function () {
                var url = "{{ route('admin.admin.leave_applications.destroyy',':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    url: url,
                    dataType: 'json',
                    data: {"id": id}
                }).done(function (response) {
                    if (response.success == "deleted") {

                        $('#deleteModal').modal('hide');
                        $('#row' + id).fadeOut(500);
                        table._fnDraw();
                        showToastrMessage("@lang("messages.leaveApplicationDeleteMessage")", '{{__('core.success')}}', 'success');
                    }
                });
            })
        }

        function show_application(id) {
            var url = "{!!  route('admin.admin.leave_applications.show',':id')  !!}";
            url = url.replace(':id', id);
            $.ajaxModal('#showModal', url);
        }



    </script>

@stop
