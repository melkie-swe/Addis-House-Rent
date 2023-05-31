@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
HUHRMS
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link href="{{ asset('vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="{{ asset('vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/only_dashboard.css') }}" />
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendors/morrisjs/morris.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/dashboard2.css') }}" />


@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <h1>Welcome to Dashboard</h1>
    <ol class="breadcrumb">
        <li class=" breadcrumb-item active">
            <a href="#">
                <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Dashboard
            </a>
        </li>
    </ol>
</section>
<section class="content indexpage pr-3 pl-3">
    
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>Employees</span>

                                <div class="number" id="myTargetElement3"></div>
                            </div>
                            <div class="col-6">
                                <span class="widget_circle4 float-right">
                                    <i class="livicon livicon-evo-holder " data-name="users" data-l="true"
                                        data-c="#F89A14" data-hc="#F89A14" data-s="40"></i>
                                </span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>Male</span>

                                <div class="number" id="myTargetElement1"></div>
                            </div>
                            <div class="col-6">
                                <span class="widget_circle4 float-right">
                                    <i class="livicon livicon-evo-holder " data-name="user" data-l="true"
                                        data-c="#F89A14" data-hc="#F89A14" data-s="40"></i>
                                </span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>female</span>

                                <div class="number" id="myTargetElement2"></div>
                            </div>
                            <div class="col-6">
                                <span class="widget_circle4 float-right">
                                    <i class="livicon livicon-evo-holder " data-name="user" data-l="true"
                                        data-c="#F89A14" data-hc="#F89A14" data-s="40"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3  col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
            <!-- Trans label pie charts strats here-->
            <div class="widget-1">
                <div class="card-body squarebox square_boxs">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 text-right">
                                <span>Users</span>

                                <div class="number" id="myTargetElement4"></div>
                            </div>
                            <div class="col-6">
                                <span class="widget_circle4 float-right">
                                    <i class="livicon livicon-evo-holder " data-name="user" data-l="true"
                                        data-c="#F89A14" data-hc="#F89A14" data-s="40"></i>
                                </span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 my-3">
            <div class="card card-border">
                <div class="card-header bg-success text-white">

                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                        data-hc="#fff"></i> Calendar

                </div>
                <div class="card-body">
                    <div id='external-events'></div>
                    <div id="calendar"></div>
                    <div id="fullCalModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 id="modalTitle" class="modal-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span> <span class="sr-only">close</span></button>

                                </div>
                                <div id="modalBody" class="modal-body">
                                    <i class="mdi-action-alarm-on"></i>&nbsp;&nbsp;Start: <span
                                        id="startTime"></span>&nbsp;&nbsp;-
                                    End: <span id="endTime"></span>
                                    <h4 id="eventInfo"></h4>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-raised btn-danger " data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer pad-5">
                        <a href="#" class="btn btn-success btn-block createevent_btn clr" data-toggle="modal"
                            data-target="#myModal">Create event
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title mr-auto" id="myModalLabel">
                                        <i class="fa fa-plus"></i> Create Event
                                    </h4>
                                    <button type="button" class="close reset" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <input type="text" id="new-event" class="form-control" placeholder="Event">
                                        <div class="input-group-btn">
                                            <button type="button" id="color-chooser-btn"
                                                class="color-chooser btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                                Type
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu float-right" id="color-chooser">
                                                <li>
                                                    <a class="palette-primary" href="#">Primary</a>
                                                </li>
                                                <li>
                                                    <a class="palette-success" href="#">Success</a>
                                                </li>
                                                <li>
                                                    <a class="palette-info" href="#">Info</a>
                                                </li>
                                                <li>
                                                    <a class="palette-warning" href="#">warning</a>
                                                </li>
                                                <li>
                                                    <a class="palette-danger" href="#">Danger</a>
                                                </li>
                                                <li>
                                                    <a class="palette-default" href="#">Default</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success mr-auto" id="add-new-event"
                                        data-dismiss="modal">
                                        <i class="fa fa-plus"></i> Add
                                    </button>
                                    <button type="button" class="btn btn-danger justify-content-end reset"
                                        data-dismiss="modal">
                                        Close
                                        <i class="fa fa-times"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        <i class="fa fa-plus"></i>
                                        Edit Event
                                    </h4>
                                    <button type="button" class="close reset" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>


                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <input type="text" id="event_title" class="form-control" placeholder="Event">
                                        <div class="input-group-btn">
                                            <button type="button" id="color-chooser-btn_edit"
                                                class="color-chooser btn btn-info dropdown-toggle "
                                                data-toggle="dropdown">
                                                Type
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu float-right" id="color-chooser">
                                                <li>
                                                    <a class="palette-primary" href="#">Primary</a>
                                                </li>
                                                <li>
                                                    <a class="palette-success" href="#">Success</a>
                                                </li>
                                                <li>
                                                    <a class="palette-info" href="#">Info</a>
                                                </li>
                                                <li>
                                                    <a class="palette-warning" href="#">warning</a>
                                                </li>
                                                <li>
                                                    <a class="palette-danger" href="#">Danger</a>
                                                </li>
                                                <li>
                                                    <a class="palette-default" href="#">Default</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success mr-auto text_save"
                                        data-dismiss="modal">
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">
                                        Close
                                        <i class="fa fa-times"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- To do list -->
        <div class="col-lg-6 col-md-6 col-sm-6 my-3">
            <div class="card todolist">
                <div class="card-header bg-primary text-white ">
                    <span class=" background_color">
                        <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white"
                            data-l="true"></i>
                        Tasks
                    </span>
                </div>
                <div class="card-body nopadmar top_height">
                    <div class="card-body">
                        <div class="scroller_height">
                            <div class="row list_of_items">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="add_list adds bg_white">
                        {!! Form::open(['class'=>'form', 'id'=>'main_input_box']) !!}
                        <div class="form-group">
                            {!! Form::label('task_description', 'Task description: ') !!}
                            {!! Form::text('task_description', null, ['class' =>
                            'form-control','id'=>'task_description', 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('task_deadline', 'Deadline: ') !!}
                            {!! Form::text('task_deadline', null, ['class' => 'form-control datepicker',
                            'id'=>'task_deadline', 'data-date-format'=> 'YYYY/MM/DD', 'required' =>
                            'required','autocomplete' => 'off']) !!}
                        </div>
                        <button type="submit" class="btn btn-primary add_button">
                            Add Task
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    {{-- <div class="row">
        <div class="col-md-4 col-sm-12 col-lg-4 col-12 my-3">
            <div class="card ">
                <div class="card-header bg-danger bdr text-white">
                    <span>
                        <i class="livicon" data-name="mail" data-size="18" data-color="white" data-hc="white"
                            data-l="true"></i>
                        Quick Mail
                    </span>
                </div>
                <div class="card-body">
                    <div class="compose row">
                        <label class="col-sm-1 col-md-3 d-none d-sm-block" style="padding: 0">To:</label>
                        <input type="text" class="col-sm-11 col-md-9 col-12" placeholder="name@email.com "
                            tabindex="1" />

                        <div class="clear"></div>
                        <label class="col-sm-1 col-md-3 hidden-xs" style="padding: 0">Subject:</label>
                        <input type="text" class="col-sm-11 col-md-9 col-12" tabindex="1" placeholder="Subject" />

                        <div class="clear"></div>
                        <div class="box-body">
                            <form>
                                <textarea class="textarea textarea_home form-control"
                                    placeholder="Write mail content here" cols="6" rows="6"></textarea>
                            </form>
                        </div>
                        <div class="ml-auto my-2">
                            <a href="#" class="btn btn-danger clr">Send</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 my-3">
            <div class="card card-border">

                <div class="card-header">
                    <h4 class="card-title float-left margin-top-10">
                        <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763"
                            data-hc="#515763"></i>
                        Visitors Map
                    </h4>

                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#515763"
                                data-hc="#515763"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="card-collapse collapses" href="#">
                                    <i class="fa fa-angle-up"></i>
                                    <span>Collapse</span>
                                </a>
                            </li>
                            <li>
                                <a class="card-refresh" href="#">
                                    <i class="fa fa-redo"></i>
                                    <span>Refresh</span>
                                </a>
                            </li>
                            <li>
                                <a class="card-config" href="#card-config" data-toggle="modal">
                                    <i class="fa fa-wrench"></i>
                                    <span>Configurations</span>
                                </a>
                            </li>
                            <li>
                                <a class="card-expand" href="#">
                                    <i class="fa fa-expand"></i>
                                    <span>Fullscreen</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="card-body nopadmar nopad_lr">
                    <div id="world-map-markers" style="width:100%; height:300px;"></div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
<div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alert</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- EASY PIE CHART JS -->
<script src="{{ asset('vendors/bower-jquery-easyPieChart/js/easypiechart.min.js') }}"></script>
<script src="{{ asset('vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('vendors/bower-jquery-easyPieChart/js/jquery.easingpie.js') }}"></script>
<!--for calendar-->
<script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script>
<!--   Realtime Server Load  -->
<script src="{{ asset('vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/flotchart/js/jquery.flot.resize.js') }}" type="text/javascript"></script>
<!--Sparkline Chart-->
<script src="{{ asset('vendors/sparklinecharts/jquery.sparkline.js') }}"></script>
<!-- Back to Top-->
<script type="text/javascript" src="{{ asset('vendors/countUp.js/js/countUp.js') }}"></script>
<!--   maps -->
<script src="{{ asset('vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<!--  todolist-->
<script src="{{ asset('js/pages/todolist.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}" type="text/javascript"></script>


<!--//jquery-ui-->

{{--<script src="{{ asset('js/pages/jquery-ui.min.js') }}" type="text/javascript"></script>--}}

<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
<!--for calendar-->
<script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
<!-- Back to Top-->
<script type="text/javascript" src="{{ asset('vendors/countUp.js/js/countUp.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
<script src="{{ asset('vendors/morrisjs/morris.min.js') }}"></script>
<script src="{{ asset('vendors/highcharts/highcharts.js') }}" charset="utf-8"></script>


<script>
    var useOnComplete = false,
        useEasing = false,
        useGrouping = false,
        options = {
            useEasing: useEasing, // toggle easing
            useGrouping: useGrouping, // 1,000,000 vs 1000000
            separator: ',', // character to use as a separator
            decimal: '.' // character to use as a decimal
        };
    <!-- prettier-ignore -->
    var demo = new CountUp("myTargetElement1", 125, {{ $employee_count_male }}, 0, 6, options);
    demo.start();
    <!-- prettier-ignore -->
    var demo = new CountUp("myTargetElement2", 125, {{ $employee_count_female }}, 0, 6, options);
    demo.start();
    <!-- prettier-ignore -->
    var demo = new CountUp("myTargetElement3", 125, {{ $employee_count }}, 0, 6, options);
    demo.start();
    <!-- prettier-ignore -->
    var demo = new CountUp("myTargetElement4", 125, {{ $user_count }}, 0, 6, options);
    demo.start();

    $('.blogs').slimScroll({
        color: '#A9B6BC',
        height: 350 + 'px',
        size: '5px'
    });

    <!-- prettier-ignore -->
    var week_data = {!! $month_visits !!};
    var year_data = {!! $year_visits !!};
    var user_types = {!! $userTypes !!}

    function lineChart() {
        if(week_data) {
            Morris.Line({
                element: 'visitors_chart',
                data: week_data,
                lineColors: ['#418BCA', '#00bc8c', '#EF6F6C'],
                xkey: 'date',
                ykeys: ['pageViews', 'visitors'],
                labels: ['pageViews', 'visitors'],
                pointSize: 0,
                lineWidth: 2,
                resize: true,
                fillOpacity: 1,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'

            });
        }
    }

    function barChart() {
        Morris.Bar({
            element: 'bar_chart',
            data: year_data.length ? year_data : [{
                label: "No Data",
                value: 100
            }],
            barColors: ['#418BCA', '#00bc8c'],
            xkey: 'date',
            ykeys: ['pageViews', 'visitors'],
            labels: ['pageViews', 'visitors'],
            pointSize: 0,
            lineWidth: 2,
            resize: true,
            fillOpacity: 0.4,
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            hideHover: 'auto'

        });
    }
    function donutChart() {
        Morris.Donut({
            element: 'donut_chart',
            data: user_types,
            colors: ['#418BCA', '#00bc8c'],
            resize: true,
        });
    }
    lineChart();
    barChart();
    donutChart();
    $(".sidebar-toggle").on("click", function() {
        setTimeout(function() {
            $('#visitors_chart').empty();
            $('#bar_chart').empty();
            lineChart();
            barChart();
        }, 10);
    });
</script>
{!! $users_chart->script() !!}
{!! $user_roles->script() !!}

@stop
