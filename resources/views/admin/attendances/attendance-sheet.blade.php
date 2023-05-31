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

@stop



@section('content')

    <!-- BEGIN PAGE HEADER-->
    <div class="page-head">
        <div class="page-title"><h1>
                Attendance
            </h1></div>
        <div class="page-toolbar">
            <!-- BEGIN THEME PANEL -->
            
            <!-- END THEME PANEL -->
        </div>
    </div>
    <div class="page-bar">
        <ul class="page-breadcrumb breadcrumb">
            

        </ul>

    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">

            <div class="portlet light bordered">
                <div class="portlet-body">
                    <div class="row filter-row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="form-group form-focus">
                                <label class="control-label">@lang('core.employeeName')</label>
                                <select class="form-control select2me" name="employee_id">
                                    <option value="all">All</option>
                                    @foreach($employees as $employee)
                                        <option value="{{$employee->id}}">{{$employee->full_name}} (@lang('core.empId'): {{ $employee->id_number }})</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="form-group form-focus">
                                <label class="control-label">@lang('core.selectMonth')</label>
                                <select class="form-control select floating" name="month">
                                    <option value="1"
                                            @if(strtolower(date('F'))=='january')selected='selected'@endif >@lang('core.jan')
                                    </option>
                                    <option value="2"
                                            @if(strtolower(date('F'))=='february')selected='selected'@endif>@lang('core.feb')
                                    </option>
                                    <option value="3"
                                            @if(strtolower(date('F'))=='march')selected='selected'@endif>@lang('core.mar')
                                    </option>
                                    <option value="4"
                                            @if(strtolower(date('F'))=='april')selected='selected'@endif>@lang('core.apr')
                                    </option>
                                    <option value="5" @if(strtolower(date('F'))=='may')selected='selected'@endif>
                                        @lang('core.may')
                                    </option>
                                    <option value="6"
                                            @if(strtolower(date('F'))=='june')selected='selected'@endif>@lang('core.jun')
                                    </option>
                                    <option value="7"
                                            @if(strtolower(date('F'))=='july')selected='selected'@endif>@lang('core.jul')
                                    </option>
                                    <option value="8"
                                            @if(strtolower(date('F'))=='august')selected='selected'@endif>@lang('core.aug')
                                    </option>
                                    <option value="9"
                                            @if(strtolower(date('F'))=='september')selected='selected'@endif>
                                        @lang('core.sept')
                                    </option>
                                    <option value="10"
                                            @if(strtolower(date('F'))=='october')selected='selected'@endif>@lang('core.oct')
                                    </option>
                                    <option value="11"
                                            @if(strtolower(date('F'))=='november')selected='selected'@endif>@lang('core.nov')
                                    </option>
                                    <option value="12"
                                            @if(strtolower(date('F'))=='december')selected='selected'@endif>@lang('core.dec')
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="form-group form-focus">
                                <label class="control-label">@lang('core.selectYear')</label>
                                {!!  Form::selectYear('year', 2015, date('Y'),date('Y'),['class' => 'form-control select floating'])  !!}
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="form-group form-focus">
                                <label class="control-label">&nbsp;</label>
                                <a href="javascript:;" class="btn btn-success btn-block" onclick="filter(); return false;"> Search </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="table-responsive" id="attendance-sheet">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


@section('footer_scripts')
    @include('admin.include.footerjs')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    
    

    <!-- END PAGE LEVEL PLUGINS -->
   
    <script type="text/javascript">
        var filter = () => {
             var data = {
                 employee_id: $("select[name='employee_id']").val(),
                 month: $("select[name='month']").val(),
                 year: $("select[name='year']").val(),
                 _token: '{{ csrf_token() }}'
             };
 
             var url = "{{ route('admin.attendance.filter') }}";
             $.easyAjax({
                 type: 'POST',
                 url: url,
                 container: '#attendance-sheet',
                 data: data,
                 success: function (res) {
                     if (res.status === 'success') {
                         $('#attendance-sheet').html(res.data);
                     }
                 }
             });
         };
        jQuery(document).ready(function () {
            filter();
        });
     </script>
@stop
