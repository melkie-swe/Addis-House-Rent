@extends('employee/layouts/default')

@section('title')
Leaves
@parent
@stop



@section('header_styles')

    <!-- CSS Global Compulsory -->
    <link href="{{ asset('front_assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('front_assets/css/style.css?v=2') }}" rel="stylesheet" >

    <!-- CSS Implementing Plugins -->
    <link href="{{ asset('front_assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('front_assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css') }}" rel="stylesheet" >
    <link href="{{ asset('front_assets/plugins/scrollbar/src/perfect-scrollbar.css') }}" rel="stylesheet" >
    <link href="{{ asset('front_assets/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet" >
    <link href="{{ asset('front_assets/plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" >




<!-- CSS Page Style -->
<link href="{{ asset('front_assets/css/pages/profile.css') }}" rel="stylesheet" >




<!-- CSS Theme -->
<link href="{{ asset('front_assets/css/theme-colors/blue.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.min.css') }}" rel="stylesheet" >

<!-- CSS Customization -->
<link href="{{ asset('front_assets/css/custom.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/froiden-helper/helper.css') }}" rel="stylesheet" >

    
    @yield('head')


@stop


@section('content')


<div class="wrapper">
    <!--=== Header ===-->
    

    <!--=== End Header ===-->

    <!--=== Profile ===-->
    <div class="profile container content">

        {{----------------MAINTENANCE CHECK----------------}}
       
        {{----------------MAINTENANCE CHECK----------------}}

        
        <div class="row">
            <!--Left Sidebar-->
            <div class="col-md-3 md-margin-bottom-40">
                

                {{--<img class="img-responsive profile-img margin-bottom-20" src="front_assets/img/team/5.jpg" alt="">--}}
                <p>
                <h2 class="text-center"><a href=""
                    onclick="leaveModal();return false;"> {{__('menu.applyLeave')}}</a></h2>
                
                
                </p>
                <hr>
                <div class="service-block-v3 service-block-u">
                    <!-- STAT -->
                    <div class="row profile-stat">
                        <div class="col-md-6 col-sm-6 col-xs-6" data-toggle="tooltip" data-placement="bottom"
                             title="{!! date('F') !!}">
                            <div class="uppercase profile-stat-title">
                                {{$attendance_count}}
                            </div>
                            <div class="uppercase profile-stat-text">
                                {{__('core.attendance')}}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6" data-toggle="tooltip" data-placement="bottom"
                             title="{{__('core.leaves')}}">
                            <div class="uppercase profile-stat-title">
                                {{$leaveLeft}}
                            </div>
                            <div class="uppercase profile-stat-text">
                                {{__('core.leaves')}}
                            </div>
                        </div>
                        
                    </div>
                    <!-- END STAT -->
                </div>


                

                
                <div class="margin-bottom-50"></div>
                
                @yield('typearea')
            </div>
            <!--End Left Sidebar-->

            {{--------------------Main Area----------------}}
            @yield('mainarea')
            {{---------------Main Area End here------------}}


        </div><!--/end row-->


    </div>
    


    {{--------------------------Apply Leave  MODALS-----------------------------}}

    <div class="modal fade apply_modal in" id="applyLeave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">


            </div>
        </div>
    </div>
    {{------------------------Apply Leave MODALS-------------------------}}


    {{--------------------------Change Password  MODALS-----------------------------}}
    <div class="modal fade change_password_modal in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">
                        {{__('menu.changePassword')}}
                    </h4>
                </div>
                <div class="modal-body" id="change_password_modal_body">
                    {{--Load with Ajax call--}}

                </div>
            </div>
        </div>
    </div>
    {{------------------------Change Password  MODALS-------------------------}}


</div><!--/wrapper-->

@stop


@section('footer_scripts')

<script src="https://cdn.ravenjs.com/2.1.0/raven.min.js" rel="core"></script>

<!-- JS Global Compulsory -->
<script src="{{ asset('front_assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('front_assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('front_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('front_assets/plugins/back-to-top.js') }}"></script>


<!-- Scrollbar -->
<script src="{{ asset('front_assets/plugins/scrollbar/src/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('front_assets/plugins/scrollbar/src/perfect-scrollbar.js') }}"></script>

<!-- JS Customization -->
<script src="{{ asset('front_assets//plugins/sky-forms/version-2.0.1/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('front_assets/plugins/sky-forms/version-2.0.1/js/jquery.form.min.js') }}"></script>

<!-- JS Page Level -->
<script src="{{ asset('front_assets/plugins/lib/moment.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/froiden-helper/helper.js') }}"></script>

@yield('footerjs')

<!--[if lt IE 9]>
<script src="{{ asset('front_assets/plugins/respond.js') }}"></script>
<script src="{{ asset('front_assets/plugins/html5shiv.js') }}"></script>    

<![endif]-->
<script>
    jQuery(document).ready(function ($) {
        "use strict";
        $('.contentHolder').perfectScrollbar();

        /*$('#start_date').datepicker({
            dateFormat: 'dd/mm/yy',
            prevText: '<i class="fa fa-angle-left"></i>',
            nextText: '<i class="fa fa-angle-right"></i>',
            minDate: 0,

            onSelect: function (selectedDate) {

                var diff = ($("#end_date").datepicker("getDate") -
                    $("#start_date").datepicker("getDate")) /
                    1000 / 60 / 60 / 24 + 1; // days
                if ($("#end_date").datepicker("getDate") != null) {
                    $('#daysSelected').html(diff);
                    $('#days').val(diff);
                }
                $('#end_date').datepicker('option', 'minDate', selectedDate);
            }
        });
        $('#end_date').datepicker({
            dateFormat: 'dd/mm/yy',
            prevText: '<i class="fa fa-angle-left"></i>',
            nextText: '<i class="fa fa-angle-right"></i>',
            onSelect: function (selectedDate) {

                $('#start_date').datepicker('option', 'maxDate', selectedDate);

                var diff = ($("#end_date").datepicker("getDate") -
                    $("#start_date").datepicker("getDate")) /
                    1000 / 60 / 60 / 24 + 1; // days
                if ($("#start_date").datepicker("getDate") != null) {
                    $('#daysSelected').html(diff);
                    $('#days').val(diff);
                }

            }
        });*/

    });

    function leaveModal() {
        $.ajaxModal('#applyLeave', '{{route('employee.leaves.create')}}');
    }
</script>


<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script>
    $('input[type=checkbox]').uniform();


   


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


@stop
