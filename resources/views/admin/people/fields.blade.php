{{-- page level styles --}}
@section('header_styles')
<meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Dependent AJAX Dropdown Tutorial</title>
    <!-- CSS only -->

    {{-- for amharic datepicker --}}
    <link rel="stylesheet" href="{{ asset('css/redmond.calendars.picker.css')}}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    

    {{-- form wizard --}}
    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/wizard.css') }}" rel="stylesheet">


    <link href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/daterangepicker/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet"
    type="text/css" />
    <link href="{{ asset('vendors/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .ranges li.active {
            color: #fff !important;
        }
    </style>
    



    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" />
    <!--<link rel="stylesheet" href="https://select2.org/assets/a7be624d756ba99faa354e455aed250d.css">-->
    <style>
        body{
            overflow: -webkit-paged-x;
        }
        .select2-container{
            width:100% !important;
        }
        /*github repository css*/
        .select2-result-repository__avatar {
            float: left;
            width: 60px;
            margin-right: 10px;
        }
        .select2-result-repository__avatar img {
            width: 100%;
            height: auto;
            border-radius: 2px;
        }
        .select2-result-repository__meta {
            margin-left: 70px;
        }
    </style>
@stop



    
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 my-3">
                <div class="card ">
                    <div class="card-header text-white" style="background-image: url({{asset('images/profile.jpg')}});" >
                        <span class="float-left my-2">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Add New Employee
                        </span>
                        <a href="{{ URL('admin/bulk_import_employee') }}" class="float-right btn btn-success">
                            <i class="fa fa-plus fa-fw"></i>Bulk Import</a>

                    </div>
                    <div class="card-body">
                        <!--main content-->
                        
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div id="rootwizard">
                                <ul>
                                    <li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link ml-2">Personal info</a></li>
                                    <li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link">Employement info</a></li>
                                    
                                    <li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link ml-2">Emergency contact</a></li>
                                    <li class="nav-item"><a href="#tab4" data-toggle="tab" class="nav-link ml-2"> Guarantee</a></li>
                                    <li class="nav-item"><a href="#tab5" data-toggle="tab" class="nav-link ml-2"> Educational Background</a></li>
                                    <li class="nav-item"><a href="#tab6" data-toggle="tab" class="nav-link ml-2"> Work Experience</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane " id="tab1">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="row">
                                            
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('salary', 'has-error') }}">
                                                    <div class="row">                                            
                                                        <label for="salary" class="col-sm-3 col-xs-12 control-label">Basic Salary *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="salary" name="salary" type="text" placeholder="Salary"
                                                               class="form-control required" value="{!! old('salary') !!}"/>
        
                                                        {!! $errors->first('salary', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            {{-- <p>A popup datepicker <input type="text" id="popupDatepicker"></p> --}}
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('allowance', 'has-error') }}">
                                                    <div class="row">                                            
                                                        <label for="allowance" class="col-sm-3 col-xs-12 control-label">Allowance *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="allowance" name="allowance" type="text" placeholder="allowance"
                                                               class="form-control required" value="{!! old('allowance') !!}"/>
        
                                                        {!! $errors->first('allowance', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('job_start_date', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="job_start_date" class="col-sm-3 col-xs-12 control-label">Start Date *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="job_start_date" name="job_start_date" placeholder="mm/dd/yyyy" type="text"
                                                               class="form-control required" value="{!! old('job_start_date') !!}"/>
                                                        {!! $errors->first('job_start_date', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('job_end_date', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="job_end_date" class="col-sm-3 col-xs-12 control-label">End Date *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="job_end_date" name="job_end_date" placeholder="mm/dd/yyyy" type="text"
                                                               class="form-control required" value="{!! old('job_end_date') !!}"/>
                                                        {!! $errors->first('job_end_date', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>

                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('employementtype_id', 'has-error') }}">
                                                    <div class="row">
                                                        <label for="employementtype_id" class="col-sm-3 col-xs-12 control-label">Employement Type *</label>
                                                        <div class="col-sm-8 col-xs-12">
                                                            {!! Form::select('employementtype_id',$employemetType, null, ['id'=>'employementtype_id','name'=>'employementtype_id','class' => 'form-control','old'=>'employementtype_id','placeholder'=>'select employement type']) !!}
                                                            {{-- <input id="full_name" name="full_name" type="text"
                                                                placeholder="Full Name" class="form-control required"
                                                                value="{!! old('full_name') !!}"/> --}}
        
                                                            {!! $errors->first('employementtype_id', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                            </div>

                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('workunit_dd', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="workunit_dd" class="col-sm-3 col-xs-12 control-label">Work Unit*</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <select  id="workunit_dd" class="form-control" name="workunit_dd">
                                                            <option value="">Select Work Unit</option>
                                                            @foreach ($workunits as $data)
                                                            <option value="{{$data->id}}">
                                                                {{$data->name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        {{-- {!! Form::select('workunit_dd',$qualification, null, ['id'=>'qualification_id','name'=>'qualification_id','class' => 'form-control','old'=>'qualification_id','placeholder'=>'select qualification']) !!} --}}
                                                        {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                            class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                        {!! $errors->first('workunit_dd', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>

                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('jobclass_dd', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="jobclass_dd" class="col-sm-3 col-xs-12 control-label">Job Class*</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <select id="jobclass_dd" class="form-control" name="jobclass_dd">
                                                        </select>
                                                        {{-- {!! Form::select('workunit_dd',$qualification, null, ['id'=>'qualification_id','name'=>'qualification_id','class' => 'form-control','old'=>'qualification_id','placeholder'=>'select qualification']) !!} --}}
                                                        {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                            class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                        {!! $errors->first('jobclass_dd', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>

                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('positionid_dd', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="positionid_dd" class="col-sm-3 col-xs-12 control-label">Job Position*</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <select id="positionid_dd" class="form-control" name="positionid_dd">
                                                        </select>
                                                        {{-- {!! Form::select('workunit_dd',$qualification, null, ['id'=>'qualification_id','name'=>'qualification_id','class' => 'form-control','old'=>'qualification_id','placeholder'=>'select qualification']) !!} --}}
                                                        {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                            class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                        {!! $errors->first('positionid_dd', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>

                                            
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab2" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('full_name', 'has-error') }}">
                                                    <div class="row">
                                                        <label for="full_name" class="col-sm-3 col-xs-12 control-label">Full Name *</label>
                                                        <div class="col-sm-8 col-xs-12">
                                                            <input id="full_name" name="full_name" type="text"
                                                                placeholder="Full Name" class="form-control required"
                                                                value="{!! old('full_name') !!}"/>
        
                                                            {!! $errors->first('full_name', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('id_number', 'has-error') }}">
                                                    <div class="row">
                                                        <label for="id_number" class="col-sm-3 col-xs-12 control-label">Person ID *</label>
                                                        <div class="col-sm-8 col-xs-12">
                                                            <input id="id_number" name="id_number" type="text"
                                                                placeholder="Employee ID" class="form-control required"
                                                                value="{!! old('id_number') !!}"/>
        
                                                            {!! $errors->first('id_number', '<span class="help-block">:message</span>') !!}
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('title_id', 'has-error') }}">
                                                    <div class="row">
                                                        <label for="title_id" class="col-sm-3 col-xs-12 control-label">Title *</label>
                                                        <div class="col-sm-8 col-xs-12">
                                                            {!! Form::select('title_id',$title, null, ['id'=>'title_id','name'=>'title_id','class' => 'form-control','old'=>'title_id','placeholder'=>'select title']) !!}
                                                            {{-- <input id="full_name" name="full_name" type="text"
                                                                placeholder="Full Name" class="form-control required"
                                                                value="{!! old('full_name') !!}"/> --}}
        
                                                            {!! $errors->first('title_id', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('gender_id', 'has-error') }}">
                                                    <div class="row">                                            
                                                        <label for="gender_id" class="col-sm-3 col-xs-12 control-label">Gender *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        
                                                        {!! Form::select('gender_id',$gender, null, ['id'=>'gender_id','name'=>'gender_id','class' => 'form-control required', 'old'=>'gender_id','placeholder'=>'select gender']) !!}
                                                        {{-- <input id="salary" name="salary" type="text" placeholder="Gender"
                                                               class="form-control required" value="{!! old('salary') !!}"/> --}}
        
                                                        {!! $errors->first('gender_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="email" class="col-sm-3 col-xs-12 control-label">Email *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="email" name="email" placeholder="E-mail" type="text"
                                                               class="form-control required email" value="{!! old('email') !!}"/>
                                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('pension_no', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="pension_no" class="col-sm-3 col-xs-12 control-label">Pension no *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="pension_no" name="pension_no" placeholder="Pension no" type="text"
                                                               class="form-control required" value="{!! old('pension_no') !!}"/>
                                                        {!! $errors->first('pension_no', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('mobile', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="mobile" class="col-sm-3 col-xs-12 control-label">Mobile Number</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="mobile" name="mobile" placeholder="mobile" type="text"
                                                               class="form-control required mobile" value="{!! old('mobile') !!}"/>
                                                        {!! $errors->first('mobile', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('marital_status_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="marital_status_id" class="col-sm-3 col-xs-12 control-label">Marital Status *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('marital_status_id',$meritalstatus, null, ['id'=>"marital_status_id", 'name'=>"marital_status_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"marital_status_id",'tabindex'=>"-1", 'aria-hidden'=>"true",'old'=>'marital_status_id', 'placeholder'=>'select marital status']) !!}
                                                        {{-- <input id="email" name="email" placeholder="Marital Status" type="text"
                                                               class="form-control required email" value="{!! old('email') !!}"/> --}}
                                                        {!! $errors->first('marital_status_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="email" class="col-sm-3 col-xs-12 control-label">Religion *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('religion_id',$religion, null, ['id'=>'religion_id','name'=>'religion_id','class' => 'form-control','old'=>'religion_id', 'placeholder'=>'select religion']) !!}
                                                        {{-- <input id="email" name="email" placeholder="Religion" type="text"
                                                               class="form-control required email" value="{!! old('email') !!}"/> --}}
                                                        {!! $errors->first('religion_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('zone_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="zone_id" class="col-sm-3 col-xs-12 control-label">Zone *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('zone_id',$zone, null, ['id'=>"zone_id", 'name'=>"zone_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"zone_id",'tabindex'=>"-1", 'aria-hidden'=>"true",'old'=>'zone_id','placeholder'=>'select zone']) !!}
                                                        {{-- <input id="email" name="email" placeholder="E-mail" type="text"
                                                               class="form-control required email" value="{!! old('email') !!}"/> --}}
                                                        {!! $errors->first('zone_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('woreda_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="woreda_id" class="col-sm-3 col-xs-12 control-label">Woreda *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('woreda_id',$woreda, null, ['id'=>"woreda_id", 'name'=>"woreda_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"woreda_id",'tabindex'=>"-1", 'aria-hidden'=>"true",'old'=>'woreda_id','placeholder'=>'select woreda']) !!}
                                                        {{-- <input id="email" name="email" placeholder="E-mail" type="text"
                                                               class="form-control required email" value="{!! old('email') !!}"/> --}}
                                                        {!! $errors->first('woreda_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('kebele_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="kebele_id" class="col-sm-3 col-xs-12 control-label">Kebele *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('kebele_id',$kebele, null, ['id'=>"kebele_id", 'name'=>"kebele_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"kebele_id",'tabindex'=>"-1", 'aria-hidden'=>"true",'old'=>'kebele_id','placeholder'=>'select kebele']) !!}
                                                        {{-- <input id="email" name="email" placeholder="E-mail" type="text"
                                                               class="form-control required email" value="{!! old('email') !!}"/> --}}
                                                        {!! $errors->first('kebele_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('house_number', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="house_number" class="col-sm-3 col-xs-12 control-label">House Number</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="house_number" name="house_number" placeholder="House Number" type="text"
                                                               class="form-control required" value="{!! old('house_number') !!}"/>
                                                        {!! $errors->first('house_number', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('nationality', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="nationality" class="col-sm-3 col-xs-12 control-label">Nationality *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="nationality" name="nationality" placeholder="Nationality" type="text"
                                                               class="form-control required nationality" value="{!! old('nationality') !!}"/>
                                                        {!! $errors->first('nationality', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('dobt', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="dobt" class="col-sm-3 col-xs-12 control-label">Date Of Birth *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="dobt" name="dobt" placeholder="mm/dd/yyyy" type="text"
                                                               class="form-control required" value="{!! old('dobt') !!}"/>
                                                        {!! $errors->first('dobt', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('birth_place', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="birth_place" class="col-sm-3 col-xs-12 control-label">Birth Place *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="birth_place" name="birth_place" placeholder="Birth Place" type="text"
                                                               class="form-control required birth_place" value="{!! old('birth_place') !!}"/>
                                                        {!! $errors->first('birth_place', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('mother_full_name', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="mother_full_name" class="col-sm-3 col-xs-12 control-label">Mother Full Name</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="mother_full_name" name="mother_full_name" placeholder="Mother Full Name" type="text"
                                                               class="form-control required mother_full_name" value="{!! old('mother_full_name') !!}"/>
                                                        {!! $errors->first('mother_full_name', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('ethnic_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="ethnic_id" class="col-sm-3 col-xs-12 control-label">Ethnic *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('ethnic_id',$ethnic, null, ['id'=>'ethnic_id','name'=>'ethnic_id','class' => 'form-control', 'old'=>'ethnic_id','placeholder'=>'select ethnic']) !!}
                                                        {{-- <input id="nationality" name="nationality" placeholder="Nationality" type="text"
                                                               class="form-control required nationality" value="{!! old('nationality') !!}"/> --}}
                                                        {!! $errors->first('ethnic_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>

                                        </div>
             
                                    </div>
                                    
                                    <div class="tab-pane" id="tab3" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('emergency_contact_name', 'has-error') }}">
                                                    <div class="row">
                                                        <label for="emergency_contact_name" class="col-sm-3 col-xs-12 control-label">Full Name *</label>
                                                        <div class="col-sm-8 col-xs-12">
                                                            <input id="emergency_contact_name" name="emergency_contact_name" type="text"
                                                                placeholder="emergency contact name" class="form-control required"
                                                                value="{!! old('emergency_contact_name') !!}"/>
        
                                                            {!! $errors->first('emergency_contact_name', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('emergency_contact_mobile', 'has-error') }}">
                                                    <div class="row">                                            
                                                        <label for="emergency_contact_mobile" class="col-sm-3 col-xs-12 control-label">Mobile *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="emergency_contact_mobile" name="emergency_contact_mobile" type="text" placeholder="emergency contact mobile"
                                                               class="form-control required" value="{!! old('emergency_contact_mobile') !!}"/>
        
                                                        {!! $errors->first('emergency_contact_mobile', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('emergency_contact_relation_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="emergency_contact_relation_id" class="col-sm-3 col-xs-12 control-label">Relationship *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('emergency_contact_relation_id',$relationship, null, ['id'=>'emergency_contact_relation_id','name'=>'emergency_contact_relation_id','class' => 'form-control','old'=>'emergency_contact_relation_id','placeholder'=>'select relation']) !!}
                                                        {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                               class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                        {!! $errors->first('emergency_contact_relation_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>

                                            </div>
                                     </div>
                                    </div>
                                    <div class="tab-pane" id="tab4" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('guarantee_name', 'has-error') }}">
                                                    <div class="row">
                                                        <label for="guarantee_name" class="col-sm-3 col-xs-12 control-label">Full Name *</label>
                                                        <div class="col-sm-8 col-xs-12">
                                                            <input id="guarantee_name" name="guarantee_name" type="text"
                                                                placeholder="guarantee name" class="form-control required"
                                                                value="{!! old('guarantee_name') !!}"/>
        
                                                            {!! $errors->first('guarantee_name', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('guarantee_zone_id', 'has-error') }}">
                                                    <div class="row">                                            
                                                        <label for="guarantee_zone_id" class="col-sm-3 col-xs-12 control-label">Zone *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('guarantee_zone_id',$zone, null, ['id'=>"guarantee_zone_id", 'name'=>"guarantee_zone_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"guarantee_zone_id",'tabindex'=>"-1", 'aria-hidden'=>"true",'old'=>'guarantee_zone_id','placeholder'=>'select zone']) !!}
                                                        {{-- <input id="salary" name="salary" type="text" placeholder="Salary"
                                                               class="form-control required" value="{!! old('salary') !!}"/> --}}
        
                                                        {!! $errors->first('guarantee_zone_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('guarantee_woreda_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="guarantee_woreda_id" class="col-sm-3 col-xs-12 control-label">Woreda *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('guarantee_woreda_id',$woreda, null, ['id'=>"guarantee_woreda_id", 'name'=>"guarantee_woreda_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"guarantee_woreda_id",'tabindex'=>"-1", 'aria-hidden'=>"true",'old'=>'guarantee_woreda_id','placeholder'=>'select wereda']) !!}
                                                        {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                               class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                        {!! $errors->first('guarantee_woreda_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('guarantee_kebele_id', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="guarantee_kebele_id" class="col-sm-3 col-xs-12 control-label">Kebele *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        {!! Form::select('guarantee_kebele_id',$kebele, null, ['id'=>"guarantee_kebele_id", 'name'=>"guarantee_kebele_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"guarantee_kebele_id",'tabindex'=>"-1", 'aria-hidden'=>"true",'old'=>'guarantee_kebele_id','placeholder'=>'select kebele']) !!}
                                                        {{-- <input id="job_class_id" name="job_class_id" placeholder="Job Class" type="text"
                                                               class="form-control required" value="{!! old('job_class_id') !!}"/> --}}
                                                        {!! $errors->first('guarantee_kebele_id', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('guarantee_house_number', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="guarantee_house_number" class="col-sm-3 col-xs-12 control-label">House Number *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="guarantee_house_number" name="guarantee_house_number" placeholder="guarantee house number" type="text"
                                                               class="form-control required" value="{!! old('guarantee_house_number') !!}"/>
                                                        {!! $errors->first('guarantee_house_number', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>
                                                <hr>

                                            </div>
                                            <div class="col-sm-6 col-xs-12 hris-sections">
                                                <div class="form-group {{ $errors->first('guarantee_mobile', 'has-error') }}">
                                                    <div class="row">
                                                    <label for="guarantee_mobile" class="col-sm-3 col-xs-12 control-label">Mobile Number *</label>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <input id="guarantee_mobile" name="guarantee_mobile" placeholder="guarantee mobile" type="text"
                                                               class="form-control required" value="{!! old('guarantee_mobile') !!}"/>
                                                        {!! $errors->first('guarantee_mobile', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="tab-pane  fade active show" id="tab_default_1">
                                            <div id="accordion" class="mt-0">
                                                
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-minus"></span>
                                                                <span class="crsr">educational background</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('study_field_id', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="study_field_id" class="col-sm-3 col-xs-12 control-label">Study Field *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                {!! Form::select('study_field_id',$studyField, null, ['id'=>'study_field_id','name'=>'study_field_id','class' => 'form-control','old'=>'study_field_id','placeholder'=>'select study field']) !!}
                                                                                {{-- <input id="guarantee_name" name="guarantee_name" type="text"
                                                                                    placeholder="guarantee name" class="form-control required"
                                                                                    value="{!! old('guarantee_name') !!}"/> --}}
                            
                                                                                {!! $errors->first('study_field_id', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('institution', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="institution" class="col-sm-3 col-xs-12 control-label">Institution *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="institution" name="institution" type="text" placeholder="institution"
                                                                                class="form-control required" value="{!! old('institution') !!}"/>
                            
                                                                            {!! $errors->first('institution', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('qualification_id', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="qualification_id" class="col-sm-3 col-xs-12 control-label">Qualification *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            {!! Form::select('qualification_id',$qualification, null, ['id'=>'qualification_id','name'=>'qualification_id','class' => 'form-control','old'=>'qualification_id','placeholder'=>'select qualification']) !!}
                                                                            {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                                            {!! $errors->first('qualification_id', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('graduation_date', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="graduation_date" class="col-sm-3 col-xs-12 control-label">Graduation Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="graduation_date" name="graduation_date" placeholder="Job Class" type="text"
                                                                                class="form-control required" value="{!! old('graduation_date') !!}"/>
                                                                            {!! $errors->first('graduation_date', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card my-2">
                                                    <div class="card-header" id="headingTwo">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-plus"></span>
                                                                <span class="crsr">add another educational background</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('study_field_id2', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="study_field_id2" class="col-sm-3 col-xs-12 control-label">Study Field *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                {!! Form::select('study_field_id2',$studyField, null, ['id'=>'study_field_id2','name'=>'study_field_id2','class' => 'form-control','old'=>'study_field_id2','placeholder'=>'select study field']) !!}
                                                                                
                            
                                                                                {!! $errors->first('study_field_id2', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('institution2', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="institution2" class="col-sm-3 col-xs-12 control-label">Institution *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="institution2" name="institution2" type="text" placeholder="institution"
                                                                                class="form-control required" value="{!! old('institution2') !!}"/>
                            
                                                                            {!! $errors->first('institution2', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('qualification_id2', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="qualification_id2" class="col-sm-3 col-xs-12 control-label">Qualification *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            {!! Form::select('qualification_id2',$qualification, null, ['id'=>'qualification_id2','name'=>'qualification_id2','class' => 'form-control','old'=>'qualification_id2','placeholder'=>'select qualification']) !!}
                                                                            {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                                            {!! $errors->first('qualification_id2', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('graduation_date2', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="graduation_date2" class="col-sm-3 col-xs-12 control-label">Graduation Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="graduation_date2" name="graduation_date2" placeholder="Job Class" type="text"
                                                                                class="form-control required" value="{!! old('graduation_date2') !!}"/>
                                                                            {!! $errors->first('graduation_date2', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="card my-3">
                                                    <div class="card-header" id="headingThree">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-plus"></span>
                                                                <span class="crsr">add another educational background</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('study_field_id3', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="study_field_id3" class="col-sm-3 col-xs-12 control-label">Study Field *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                {!! Form::select('study_field_id3',$studyField, null, ['id'=>'study_field_id3','name'=>'study_field_id3','class' => 'form-control','old'=>'study_field_id3','placeholder'=>'select study field']) !!}
                                                                                
                            
                                                                                {!! $errors->first('study_field_id3', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('institution3', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="institution3" class="col-sm-3 col-xs-12 control-label">Institution *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="institution3" name="institution3" type="text" placeholder="institution"
                                                                                class="form-control required" value="{!! old('institution3') !!}"/>
                            
                                                                            {!! $errors->first('institution3', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('qualification_id3', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="qualification_id3" class="col-sm-3 col-xs-12 control-label">Qualification *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            {!! Form::select('qualification_id3',$qualification, null, ['id'=>'qualification_id3','name'=>'qualification_id3','class' => 'form-control','old'=>'qualification_id3','placeholder'=>'select qualification']) !!}
                                                                            {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                                            {!! $errors->first('qualification_id3', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('graduation_date3', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="graduation_date3" class="col-sm-3 col-xs-12 control-label">Graduation Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="graduation_date3" name="graduation_date3" placeholder="Job Class" type="text"
                                                                                class="form-control required" value="{!! old('graduation_date3') !!}"/>
                                                                            {!! $errors->first('graduation_date3', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="card my-4">
                                                    <div class="card-header" id="headingFour">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-plus"></span>
                                                                <span class="crsr">add another educational background</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('study_field_id4', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="study_field_id4" class="col-sm-3 col-xs-12 control-label">Study Field *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                {!! Form::select('study_field_id4',$studyField, null, ['id'=>'study_field_id4','name'=>'study_field_id4','class' => 'form-control','old'=>'study_field_id4','placeholder'=>'select study field']) !!}
                                                                                
                            
                                                                                {!! $errors->first('study_field_id4', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('institution4', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="institution4" class="col-sm-3 col-xs-12 control-label">Institution *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="institution4" name="institution4" type="text" placeholder="institution"
                                                                                class="form-control required" value="{!! old('institution4') !!}"/>
                            
                                                                            {!! $errors->first('institution4', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('qualification_id4', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="qualification_id4" class="col-sm-3 col-xs-12 control-label">Qualification *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            {!! Form::select('qualification_id4',$qualification, null, ['id'=>'qualification_id4','name'=>'qualification_id4','class' => 'form-control','old'=>'qualification_id4','placeholder'=>'select qualification']) !!}
                                                                            {{-- <input id="position_id" name="position_id" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('position_id') !!}"/> --}}
                                                                            {!! $errors->first('qualification_id4', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('graduation_date4', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="graduation_date4" class="col-sm-3 col-xs-12 control-label">Graduation Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="graduation_date4" name="graduation_date4" placeholder="Job Class" type="text"
                                                                                class="form-control required" value="{!! old('graduation_date4') !!}"/>
                                                                            {!! $errors->first('graduation_date4', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab6" disabled="disabled">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="tab-pane  fade active show" id="tab_default_1">
                                            <div id="accordion2" class="mt-0">
                                                
                                                <div class="card my-6">
                                                    <div class="card-header" id="headingSix">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-minus"></span>
                                                                <span class="crsr">work experience</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('job_title', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="job_title" class="col-sm-3 col-xs-12 control-label">Job Title *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                <input id="job_title" name="job_title" type="text"
                                                                                    placeholder="job title" class="form-control required"
                                                                                    value="{!! old('job_title') !!}"/>
                            
                                                                                {!! $errors->first('job_title', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('organization', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="organization" class="col-sm-3 col-xs-12 control-label">Organization *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="organization" name="organization" type="text" placeholder="organization"
                                                                                class="form-control required" value="{!! old('organization') !!}"/>
                            
                                                                            {!! $errors->first('organization', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('start_date', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="start_date" class="col-sm-3 col-xs-12 control-label">Start Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            <input id="start_date" name="start_date" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('start_date') !!}"/>
                                                                            {!! $errors->first('start_date', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('end_date', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="end_date" class="col-sm-3 col-xs-12 control-label">End Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="end_date" name="end_date" placeholder="end date" type="text"
                                                                                class="form-control required" value="{!! old('end_date') !!}"/>
                                                                            {!! $errors->first('end_date', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('wsalary', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="wsalary" class="col-sm-3 col-xs-12 control-label">Salary *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                
                                                                                <input id="wsalary" name="wsalary" placeholder="salary" type="text"
                                                                                    class="form-control required" value="{!! old('wsalary') !!}"/>
                                                                                {!! $errors->first('wsalary', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card my-7">
                                                    <div class="card-header" id="headingSeven">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSix" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-plus"></span>
                                                                <span class="crsr">add another work experience</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('job_title2', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="job_title2" class="col-sm-3 col-xs-12 control-label">Job Title *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                <input id="job_title2" name="job_title2" type="text"
                                                                                    placeholder="job title" class="form-control required"
                                                                                    value="{!! old('job_title2') !!}"/>
                            
                                                                                {!! $errors->first('job_title2', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('organization2', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="organization2" class="col-sm-3 col-xs-12 control-label">Organization *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="organization2" name="organization2" type="text" placeholder="organization"
                                                                                class="form-control required" value="{!! old('organization2') !!}"/>
                            
                                                                            {!! $errors->first('organization2', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('start_date2', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="start_date2" class="col-sm-3 col-xs-12 control-label">Start Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            <input id="start_date2" name="start_date2" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('start_date2') !!}"/>
                                                                            {!! $errors->first('start_date2', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('end_date2', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="end_date2" class="col-sm-3 col-xs-12 control-label">End Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="end_date2" name="end_date2" placeholder="end date" type="text"
                                                                                class="form-control required" value="{!! old('end_date2') !!}"/>
                                                                            {!! $errors->first('end_date2', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('wsalary2', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="wsalary2" class="col-sm-3 col-xs-12 control-label">Salary *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                
                                                                                <input id="wsalary2" name="wsalary2" placeholder="salary" type="text"
                                                                                    class="form-control required" value="{!! old('wsalary2') !!}"/>
                                                                                {!! $errors->first('wsalary2', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="card my-8">
                                                    <div class="card-header" id="headingEight">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseSeven" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-plus"></span>
                                                                <span class="crsr">add another work experience</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('job_title3', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="job_title3" class="col-sm-3 col-xs-12 control-label">Job Title *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                <input id="job_title3" name="job_title3" type="text"
                                                                                    placeholder="job title" class="form-control required"
                                                                                    value="{!! old('job_title3') !!}"/>
                            
                                                                                {!! $errors->first('job_title3', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('organization3', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="organization3" class="col-sm-3 col-xs-12 control-label">Organization *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="organization3" name="organization3" type="text" placeholder="organization"
                                                                                class="form-control required" value="{!! old('organization3') !!}"/>
                            
                                                                            {!! $errors->first('organization3', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('start_date3', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="start_date3" class="col-sm-3 col-xs-12 control-label">Start Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            <input id="start_date3" name="start_date3" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('start_date3') !!}"/>
                                                                            {!! $errors->first('start_date3', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('end_date3', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="end_date3" class="col-sm-3 col-xs-12 control-label">End Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="end_date3" name="end_date3" placeholder="end date" type="text"
                                                                                class="form-control required" value="{!! old('end_date3') !!}"/>
                                                                            {!! $errors->first('end_date3', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('wsalary3', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="wsalary3" class="col-sm-3 col-xs-12 control-label">Salary *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                
                                                                                <input id="wsalary3" name="wsalary3" placeholder="salary" type="text"
                                                                                    class="form-control required" value="{!! old('wsalary3') !!}"/>
                                                                                {!! $errors->first('wsalary3', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="card my-9">
                                                    <div class="card-header" id="headingNine">
                                                        <span>
                                                            <a data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseEight" class="text-success" style="color: #01bc8c !important; font-weight: 400;">
                                                                <span class=" fa fa-plus"></span>
                                                                <span class="crsr">add another work experience</span></a>
                                                        </span>
                                                    </div>
                                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('job_title4', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="job_title4" class="col-sm-3 col-xs-12 control-label">Job Title *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                <input id="job_title4" name="job_title4" type="text"
                                                                                    placeholder="job title" class="form-control required"
                                                                                    value="{!! old('job_title4') !!}"/>
                            
                                                                                {!! $errors->first('job_title4', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('organization4', 'has-error') }}">
                                                                        <div class="row">                                            
                                                                            <label for="organization4" class="col-sm-3 col-xs-12 control-label">Organization *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="organization4" name="organization4" type="text" placeholder="organization"
                                                                                class="form-control required" value="{!! old('organization4') !!}"/>
                            
                                                                            {!! $errors->first('organization4', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('start_date4', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="start_date4" class="col-sm-3 col-xs-12 control-label">Start Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            <input id="start_date4" name="start_date4" placeholder="Job Position" type="text"
                                                                                class="form-control required" value="{!! old('start_date4') !!}"/>
                                                                            {!! $errors->first('start_date4', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('end_date4', 'has-error') }}">
                                                                        <div class="row">
                                                                        <label for="end_date4" class="col-sm-3 col-xs-12 control-label">End Date *</label>
                                                                        <div class="col-sm-8 col-xs-12">
                                                                            
                                                                            <input id="end_date4" name="end_date4" placeholder="end date" type="text"
                                                                                class="form-control required" value="{!! old('end_date4') !!}"/>
                                                                            {!! $errors->first('end_date4', '<span class="help-block">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <hr>
                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group {{ $errors->first('wsalary4', 'has-error') }}">
                                                                        <div class="row">
                                                                            <label for="wsalary4" class="col-sm-3 col-xs-12 control-label">Salary *</label>
                                                                            <div class="col-sm-8 col-xs-12">
                                                                                
                                                                                <input id="wsalary4" name="wsalary4" placeholder="salary" type="text"
                                                                                    class="form-control required" value="{!! old('wsalary4') !!}"/>
                                                                                {!! $errors->first('wsalary4', '<span class="help-block">:message</span>') !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        </div>
                                    </div>
                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#">Previous</a></li>
                                        <li class="next"><a href="#">Next</a></li>
                                        <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!--row end-->
    </section>



{{-- page level scripts --}}
@section('footer_scripts')
    {{-- form wizard --}}
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/addemployee.js') }}"></script>
    <script>
        'use strict';

$('#commentForm').bootstrapValidator({
    fields: { 
        id_number: {
            validators: {
                notEmpty: {
                    message: 'The ID is required',
                },
            },
            required: true,
            minlength: 3,
        },

        salary: {
            validators: {
                notEmpty: {
                    message: 'The salary is required',
                },
            },
            required: true,
            
        },
        employementtype_id: {
            validators: {
                notEmpty: {
                    message: 'The employement type is required',
                },
            },
            required: true,
            
        },
        workunit_dd: {
            validators: {
                notEmpty: {
                    message: 'The work unit is required',
                },
            },
            required: true,
            
        },
        jobclass_dd: {
            validators: {
                notEmpty: {
                    message: 'The job class is required',
                },
            },
            required: true,
           
        },
        positionid_dd: {
            validators: {
                notEmpty: {
                    message: 'The postion id is required',
                },
            },
            required: true,
            
        },
        mobile: {
            validators: {
                
                regexp: {
                    regexp: /^(\+\d{1,3}[- ]?)?\d{10}$/,
                    message: 'Enter valid phone number',
                },
            },
        },
        full_name: {
            validators: {
                notEmpty: {
                    message: 'The full name is required',
                },
            },
            required: true,
            minlength: 3,
        },
        last_name: {
            validators: {
                notEmpty: {
                    message: 'The last name is required',
                },
            },
            required: true,
            minlength: 3,
        },
        email: {
            validators: {
                // notEmpty: {
                //     message: 'The email address is required',
                // },
                emailAddress: {
                    message: 'The input is not a valid email address',
                },
            },
        },
        
    },
});

$('#rootwizard').bootstrapWizard({
    tabClass: 'nav nav-pills',
    onNext: function(tab, navigation, index) {
        var $validator = $('#commentForm')
            .data('bootstrapValidator')
            .validate();
        return $validator.isValid();
    },
    onTabClick: function(tab, navigation, index) {
        return false;
    },
    onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index + 1;

        // If it's the last tab then hide the last button and show the finish instead
        if ($current >= $total) {
            $('#rootwizard')
                .find('.pager .next')
                .hide();
            $('#rootwizard')
                .find('.pager .finish')
                .show();
            $('#rootwizard')
                .find('.pager .finish')
                .removeClass('disabled');
        } else {
            $('#rootwizard')
                .find('.pager .next')
                .show();
            $('#rootwizard')
                .find('.pager .finish')
                .hide();
        }
    },
});

$('#rootwizard .finish').click(function() {
    var $validator = $('#commentForm')
        .data('bootstrapValidator')
        .validate();
    if ($validator.isValid()) {
        document.getElementById('commentForm').submit();
    }
});
$('#activate').on('ifChanged', function(event) {
    $('#commentForm').bootstrapValidator('revalidateField', $('#activate'));
});
$('#commentForm').keypress(function(event) {
    if (event.which == '13') {
        event.preventDefault();
    }
});

    </script>
   







    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/adduser.js') }}"></script>

    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/daterangepicker/js/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/clockface/js/clockface.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/datepicker.js') }}" type="text/javascript"></script>

    

    <script language="javascript" type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>
    <script>
        var path = "{{ route('admin.selectfilter.find') }}";
        $('#marital_status_id').select2();
        $('#zone_id').select2();
        $('#woreda_id').select2();
        $('#kebele_id').select2();
        $('#guarantee_zone_id').select2();
        $('#guarantee_woreda_id').select2();
        $('#guarantee_kebele_id').select2();
        

    </script>
    
    <script>
        $(document).ready(function () {
            $('#workunit_dd').on('change', function () {
                var idWorkunit = this.value;
                $("#jobclass_dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-jobclass')}}",
                    type: "POST",
                    data: {
                        workunit_id: idWorkunit,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#jobclass_dd').html('<option value="">Select Job Class</option>');
                        $.each(result.jobclass, function (key, value) {
                            $("#jobclass_dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#positionid_dd').html('<option value="">Select Position</option>');
                    }
                });
            });
            $('#jobclass_dd').on('change', function () {
                var idJobclass = this.value;
                var idWorkunit = workunit_dd.value;
                $("#positionid_dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-positionid')}}",
                    type: "POST",
                    data: {
                        jobclass_id: idJobclass,
                        workunit_id: idWorkunit,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#positionid_dd').html('<option value="">Select Position</option>');
                        $.each(res.positionid, function (key, value) {
                            $("#positionid_dd").append('<option value="' + value
                                .position_id + '">' + value.position_id + '</option>');
                        });
                    }
                });
            });
        });
    </script>


{{-- for amharic datepicker --}}
<script src="{{ asset('js/jquery.plugin.js')}}"></script>

<script src="{{ asset('js/jquery.calendars.js')}}"></script>
<script src="{{ asset('js/jquery.calendars.plus.js')}}"></script>
<script src="{{ asset('js/jquery.calendars.picker.js')}}"></script>

<script src="{{ asset('js/jquery.calendars.ethiopian.js')}}"></script>
<script src="{{ asset('js/jquery.calendars.ethiopian-am.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.calendars.picker-am.js')}}"></script>

<script>
$(function() {
	 var calendar = $.calendars.instance('ethiopian','am');
	$('#job_start_date').calendarsPicker({calendar: calendar});
    $('#job_end_date').calendarsPicker({calendar: calendar});
    $('#dobt').calendarsPicker({calendar: calendar});
    $('#graduation_date').calendarsPicker({calendar: calendar});
    $('#graduation_date2').calendarsPicker({calendar: calendar});
    $('#graduation_date3').calendarsPicker({calendar: calendar});
    $('#graduation_date4').calendarsPicker({calendar: calendar});
    $('#start_date').calendarsPicker({calendar: calendar});
    $('#start_date2').calendarsPicker({calendar: calendar});
    $('#start_date3').calendarsPicker({calendar: calendar});
    $('#start_date4').calendarsPicker({calendar: calendar});
    $('#end_date').calendarsPicker({calendar: calendar});
    $('#end_date2').calendarsPicker({calendar: calendar});
    $('#end_date3').calendarsPicker({calendar: calendar});
    $('#end_date4').calendarsPicker({calendar: calendar});
	$('#inlineDatepicker').calendarsPicker({calendar: calendar, onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>  
    
@stop
