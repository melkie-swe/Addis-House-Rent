@extends('admin/layouts/default')

@section('title')
Person
@parent
@stop

@section('header_styles')

<link rel="stylesheet" href="{{ asset('css/redmond.calendars.picker.css')}}">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


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

@section('content')
<section class="content-header">
    <h1>Person View</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>People</li>
        <li class="active">Person View</li>
    </ol>
</section>

<section class="content">
    {{-- <h1>teka defar</h1> --}}
    
    <div class="summary-section-wrapper" >
        <!---->
        <!---->
        <div >
            <input type="checkbox" class="js-switch2" checked />
            <div id="navigation" class="profile-section generic-bg profile-bg-default" style="z-index: 4;position: relative;background: #fff;padding: 32px;transition: all .3s;box-sizing: border-box;display: block;font-family: wotfard;font-size: 14px;line-height: 1.5;color: #55687d;background-image: url({{asset('images/profile.jpg')}});background-position: 0 -4px;background-size: 1292px 96px;background-repeat: repeat-x;border-radius: 8px;border: 2px solid #e7ecf2;">
                <div class="row" >
                    <div class="col-xs-11 user-pic-and-info-wrapper" style="float: left;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;box-sizing: border-box;display: block;">
                        <div class="user-pic-wrapper inline-block-vertical-top" style="margin-top: 34px;display: inline-block;vertical-align: top;">
                            <profile-pic imagesize="lg" class="hidden-xxs hidden-xs">
                                <span class="profile-pic circle-lg"  style="color: rgb(243, 106, 204);background-color: rgb(253, 236, 249);border: 4px solid #fff;height: 148px;width: 148px;display: inline-flex;justify-content: center;align-items: center;font-size: 40px;text-transform: uppercase;text-align: center;font-weight: 700;border-radius: 50%;vertical-align: middle;background-repeat: no-repeat;background-position: 50%;background-size: 
                                cover;line-height: 80px; ">
                                        @if (@isset($person->user))
                                        @if($person->user->pic)
                                            <img src="{{ $person->user->pic }}" alt="img"
                                            style="color: rgb(243, 106, 204);background-color: rgb(253, 236, 249);border: 4px solid #fff;height: 148px;width: 148px;display: inline-flex;justify-content: center;align-items: center;font-size: 40px;text-transform: uppercase;text-align: center;font-weight: 700;border-radius: 50%;vertical-align: middle;background-repeat: no-repeat;background-position: 50%;background-size: 
                                            cover;line-height: 80px; "/>
                                        @elseif($person->user->gender === "male")
                                            <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                            style="color: rgb(243, 106, 204);background-color: rgb(253, 236, 249);border: 4px solid #fff;height: 148px;width: 148px;display: inline-flex;justify-content: center;align-items: center;font-size: 40px;text-transform: uppercase;text-align: center;font-weight: 700;border-radius: 50%;vertical-align: middle;background-repeat: no-repeat;background-position: 50%;background-size: 
                                            cover;line-height: 80px; "/>
                                        @elseif($person->user->gender === "female")
                                            <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                            style="color: rgb(243, 106, 204);background-color: rgb(253, 236, 249);border: 4px solid #fff;height: 148px;width: 148px;display: inline-flex;justify-content: center;align-items: center;font-size: 40px;text-transform: uppercase;text-align: center;font-weight: 700;border-radius: 50%;vertical-align: middle;background-repeat: no-repeat;background-position: 50%;background-size: 
                                            cover;line-height: 80px; "/>
                                        @else
                                            <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                            style="color: rgb(243, 106, 204);background-color: rgb(253, 236, 249);border: 4px solid #fff;height: 148px;width: 148px;display: inline-flex;justify-content: center;align-items: center;font-size: 40px;text-transform: uppercase;text-align: center;font-weight: 700;border-radius: 50%;vertical-align: middle;background-repeat: no-repeat;background-position: 50%;background-size: 
                                            cover;line-height: 80px; "/>
                                        @endif
                                    @else
                                        NU
                                        
                                    @endif
                                    
                                </span>
                            </profile-pic>
                            
                        </div><!---->
                    </div>
                    <div class="col-xs-11 col-sm-8" style="margin-left: 20px;margin-top: 68px;width: calc(100% - 178px);display: inline-block;vertical-align: top;font-family: wotfard;font-size: 14px;line-height: 1.5;color: #55687d;">
                        
                        <div class="inline-block-vertical-top user-info-wrapper" style="font-weight: 200;font-size: 18px;line-height: 32px;color: #000;margin-right: 8px">
                            <div class="profile-user-section">
                                <span class="name break-word-pre-line" style="font-weight: 600;font-size: 20px;line-height: 32px;color: #000;margin-right: 8px">
                                    {{$person->user->first_name ?? null}}  {{$person->user->last_name ?? null}}
                                </span><!---->
                                <!---->
                                <!---->
                            </div>
                            <div class="profile-user-section">
                                <!---->
                                <!---->
                            </div>
                            <div class="profile-user-section">
                                <span class="user-role">{{$person->user->roleuser->role->name ?? null}}</span>
                                <!---->
                            </div><!---->
                            <div class="profile-user-section">
                                <i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc" id="livicon-46" style="width: 20px; height: 20px;"><svg height="15" version="1.1" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px; top: -0.984375px;" id="canvas-for-livicon-46"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#cccccc" stroke="none" d="M3.2,24C2.537,24,2,23.463,2,22.801V11.5L14.113,21.024C15.155,21.842000000000002,16.844,21.842000000000002,17.886,21.024L30,11.5V22.801000000000002C30,23.463,29.463,24,28.801,24H3.2ZM28.801,8H3.2C2.537,8,2,8.537,2,9.2V9.957999999999998L14.113,19.476999999999997C15.155,20.292999999999996,16.843,20.292999999999996,17.886,19.476999999999997L30,9.958V9.2C30,8.537,29.463,8,28.801,8ZM19.501,11H13.278000000000002C13.415000000000003,11.306,13.495000000000003,11.644,13.498000000000003,12H17.501000000000005C17.776,12,18,12.224,18,12.5S17.776,13,17.501,13H13.3C12.919,13.894,12.033000000000001,14.521,11,14.521C9.619,14.521,8.5,13.401,8.5,12.021S9.619,9.521,11,9.521C11.547,9.521,12.049,9.702,12.461,10H19.501C19.776,10,20,10.224,20,10.5S19.776,11,19.501,11Z" opacity="1" stroke-width="0" transform="matrix(0.625,0,0,0.625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path></svg></i>
                                <span class="break-word-pre-line">{{$person->user->email ?? null}}</span><!---->
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-xs-2 pull-right action-menu" style="background-color: #fff; margin-top: 30px;">
                        <span class="ph-icon-wrapper inline-block-vertical-middle menu-option edit">
                            <span class="icon icon-ph-edit-16"></span>
                            <a href="#" class="btn btn-secondary" style="background-color: #fff"><span class="fa fa-edit" style="background-color: #fff; width: 20px; height: 20px;"></span></a>
                            
                        </span><!---->
                        <div dropdown="" class="dropdown pull-right text-primary cursor-pointer">
                            <span dropdowntoggle="" class="ph-icon-wrapper inline-block-vertical-middle menu-option" aria-haspopup="true">
                                <span class="icon icon-ph-show-more-horizontal-16"></span>
                            </span>
                            <!---->
                        </div><!----><!---->
                    </div>
                </div><!---->
                
            </div><!---->
        </div><!---->
        <!---->
    </div>


    {{-- teka defar --}}

</section>

<section class="content">

    

    {{-- start edit modal for employement info --}}
    <div class="modal fade" id="ModalEditEmployementInfo" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Employement Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                {{-- form --}}
                {!! Form::model($person->employmentInformation, ['route' => ['admin.employmentInformations.update', collect($person->employmentInformation)->first() ], 'method' => 'patch']) !!}
                                                                
                <div class="row ">
                    {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('currentsalaryid', $current->id ?? null, ['class' => 'form-control','required']) !!}


                    {{-- <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('person_id', 'Person Id:') !!}
                            {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
                            
                        </div>
                        
                    </div> --}}
                    {{-- <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('emsalary', 'Salary:') !!}
                            {!! Form::text('emsalary', $person->employmentInformation->salary, ['class' => 'form-control']) !!}
                            
                        </div>
                       
                    </div><!----> --}}
                    
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('wstart_date', 'Start Date:') !!}
                            {!! Form::text('wstart_date', empty($person->employmentInformation->start_date) ? null : $person->employmentInformation->start_date->format('d/m/Y') ?? null, ['class' => 'form-control']) !!}
                            
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            
                                {!! Form::label('wend_date', 'End Date:') !!}
                                {!! Form::text('wend_date', empty($person->employmentInformation->end_date) ? null : $person->employmentInformation->end_date->format('d/m/Y') ?? null, ['class' => 'form-control']) !!}
                            
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            
                            {!! Form::label('employementtype_id', 'Employement Type:') !!}
                            {!! Form::select('employementtype_id',$employemetType->prepend($person->employmentInformation->employemetType->name ?? null, $person->employmentInformation->employemetType->id ?? null), null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('workunit_dd', 'Work Unit:') !!}
                            <select  id="workunit_dd" class="form-control" name="workunit_dd">
                                <option value="{{$person->employmentInformation->jobPosition->workUnit->id}}">{{$person->employmentInformation->jobPosition->workUnit->name}}</option>
                                @foreach ($workunits as $data)
                                <option value="{{$data->id}}">
                                    {{$data->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('jobclass_dd', 'jobclass:') !!}
                            <select id="jobclass_dd" class="form-control" name="jobclass_dd">
                                <option value="{{$person->employmentInformation->jobPosition->jobClass->id}}">{{$person->employmentInformation->jobPosition->jobClass->name}}</option>
                            </select>
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('positionid', 'job position:') !!}
                            <select id="positionid_dd" class="form-control" name="positionid_dd">
                                <option value="{{$person->employmentInformation->jobPosition->position_id}}">{{$person->employmentInformation->jobPosition->position_id}}</option>
                            </select>
                        </div>
                       
                    </div><!---->
                    
                </div>
                
                
                
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>

     {{-- start edit modal for salary history --}}
     <div class="modal fade" id="ModalEditsalary" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Salary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                {{-- form --}}
                
                {!! Form::open(['route' => 'admin.salaryHistories.store']) !!}                                                
                
                <div class="row ">
                    {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!} 
                    {!! Form::hidden('id_number', $person->id, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('employmentInformationid', $person->employmentInformation->id, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('work_unit', $person->employmentInformation->jobPosition->workUnit->name, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('job_class', $person->employmentInformation->jobPosition->jobClass->name, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('position_id', $person->employmentInformation->jobPosition->position_id, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('job_position_id', $person->employmentInformation->job_position_id, ['class' => 'form-control','required']) !!}
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('basicsalary', 'Basic Salary:') !!}
                            {!! Form::text('basicsalary', $person->employmentInformation->basic_salary ?? null, ['class' => 'form-control']) !!}
                            
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('allowance', 'Allowance:') !!}
                            {!! Form::text('allowance', $person->employmentInformation->allowance ?? null, ['class' => 'form-control']) !!}
                            
                        </div>
                        
                    </div>
                    
                    {{-- <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('salaryworkunit_dd', 'Work Unit:') !!}
                            <select  id="salaryworkunit_dd" class="form-control" name="salaryworkunit_dd">
                                <option value="">Select Work Unit</option>
                                @foreach ($workunits as $data)
                                <option value="{{$data->id}}">
                                    {{$data->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                       
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('salaryjobclass_dd', 'jobclass:') !!}
                            <select id="salaryjobclass_dd" class="form-control" name="salaryjobclass_dd">
                            </select>
                        </div>
                       
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('salarypositionid', 'job position:') !!}
                            <select id="salarypositionid_dd" class="form-control" name="salarypositionid_dd">
                            </select>
                        </div>
                       
                    </div> --}}
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            
                                {!! Form::label('salarydate', 'Date:') !!}
                                {!! Form::text('salarydate', empty($current->date) ? null : Carbon\Carbon::parse($current->date)->format('d/m/Y') ?? null, ['class' => 'form-control']) !!}
                            
                        </div>
                       
                    </div><!---->
                    {{-- reason --}}
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            
                            {!! Form::label('reasonforsalary', 'Reason:') !!}
                            {!! Form::select('reasonforsalary',$reasonforsalary->prepend($current->reasonname ?? null, $current->reasonid ?? null), null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    
                </div>
                
                
                
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>


    {{-- start edit modal for personal info --}}

    <div class="modal fade" id="ModalEdit" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Personal Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                {{-- form --}}
                {!! Form::model($person, ['route' => ['admin.people.update', collect($person)->first() ], 'method' => 'patch']) !!}
                <div class="row ">
                                                    
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('title_id', 'Title:') !!}
                            {!! Form::select('title_id',$title->prepend($person->title->name ?? null, $person->title->id ?? null), null, ['class' => 'form-control']) !!}
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('full_name', 'Full Name:') !!}
                            {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('id_number', 'ID NO:') !!}
                            {!! Form::text('id_number', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('gender_id', 'Gender:') !!}
                            {!! Form::select('gender_id',$gender->prepend($person->gender->name ?? null, $person->gender->id ?? null), null, ['class' => 'form-control']) !!}
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('marital_status_id', 'Marital Status Id:') !!}
                            {!! Form::select('marital_status_id',$meritalstatus->prepend($person->meritalstatus->name ?? null, $person->meritalstatus->id ?? null), null, ['id'=>"marital_status_id", 'name'=>"marital_status_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"marital_status_id",'tabindex'=>"-1", 'aria-hidden'=>"true"]) !!}
                            {{-- {!! Form::select('marital_status_id',$meritalstatus, null, ['class' => 'form-control']) !!} --}}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('religion_id', 'Religion Name:') !!}
                            {!! Form::select('religion_id',$religion->prepend($person->religion->name ?? null, $person->religion->id ?? null), null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('zone_id', 'Zone:') !!}
                            {!! Form::select('zone_id',$zone->prepend($person->address->zone->name ?? null, $person->address->zone->id ?? null), null, ['id'=>"zone_id", 'name'=>"zone_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"zone_id",'tabindex'=>"-1", 'aria-hidden'=>"true"]) !!}
                            {{-- {!! Form::select('zone_id',$zone, null, ['class' => 'form-control']) !!} --}}
                            
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('woreda_id', 'Woreda:') !!}
                            {!! Form::select('woreda_id',$woreda->prepend($person->address->woreda->name ?? null, $person->address->woreda->id ?? null), null, ['id'=>"woreda_id", 'name'=>"woreda_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"woreda_id",'tabindex'=>"-1", 'aria-hidden'=>"true"]) !!}
                            {{-- {!! Form::select('woreda_id',$woreda, null, ['class' => 'form-control']) !!} --}}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('kebele_id', 'kebele:') !!}
                            {!! Form::select('kebele_id',$kebele->prepend($person->address->kebele->name ?? null, $person->address->kebele->id ?? null), null, ['id'=>"kebele_id", 'name'=>"kebele_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"kebele_id",'tabindex'=>"-1", 'aria-hidden'=>"true"]) !!}
                            {{-- {!! Form::select('kebele_id',$kebele, null, ['class' => 'form-control']) !!} --}}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('house_number', 'House Number:') !!}
                            {!! Form::text('house_number', $person->address->house_number ?? null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('nationality', 'Nationality:') !!}
                            {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('mobile', 'Mobile:') !!}
                            {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('mother_full_name', 'Mother Full Name:') !!}
                            {!! Form::text('mother_full_name', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('ethnic_id', 'Ethnic:') !!}
                            {!! Form::select('ethnic_id',$ethnic->prepend($person->ethnic->name ?? null, $person->ethnic->id ?? null), null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('dob', 'date of birth:') !!}
                            {!! Form::date('dob', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->

                </div>
                
                
                
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>

    {{-- start edit modal for Emergency contact --}}
    <div class="modal fade" id="ModalEditEmergency" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Emergency contact </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                {{-- form --}}
                @if (@isset($person->emergency))
                {!! Form::model($person->emergency, ['route' => ['admin.emergencyContacts.update', collect($person->emergency)->first() ], 'method' => 'patch']) !!}
                
                @else
                {!! Form::open(['route' => 'admin.emergencyContacts.store']) !!}
                    
                @endif
                
                <div class="row ">
                    {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!}
                                                    
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('emergency_contact_name', 'Emergency Contact name:') !!}
                            {!! Form::text('emergency_contact_name', $person->emergency->full_name ?? null, ['class' => 'form-control']) !!}
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('emergency_contact_mobile', 'Emergency Contact mobile:') !!}
                            {!! Form::text('emergency_contact_mobile', $person->emergency->mobile ?? null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('emergency_contact_relation_id', 'Emergency Contact relation:') !!}
                            {!! Form::select('emergency_contact_relation_id',$relationship->prepend($person->emergency->relationship->name ?? null, $person->emergency->relationship->id ?? null), null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    
                </div>
                
                
                
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>


    {{-- start edit modal for Guarantee --}}
    <div class="modal fade" id="ModalEditGuarantee" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Guarantee </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                {{-- form --}}
                @if (@isset($person->guarantee))
                {!! Form::model($person->guarantee, ['route' => ['admin.guarantees.update', collect($person->guarantee)->first() ], 'method' => 'patch']) !!}

                @else
                {!! Form::open(['route' => 'admin.guarantees.store']) !!}
                    
                @endif
                
                <div class="row ">
                    {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!}
                                                    
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('guarantee_name', 'Guarantee name:') !!}
                            {!! Form::text('guarantee_name', $person->guarantee->full_name ?? null, ['class' => 'form-control']) !!}
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('guarantee_zone_id', 'guarantee Zone:') !!}
                            {!! Form::select('guarantee_zone_id',$zone->prepend($person->guarantee->address->zone->name ?? null, $person->guarantee->address->zone->id ?? null), null, ['id'=>"guarantee_zone_id", 'name'=>"guarantee_zone_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"guarantee_zone_id",'tabindex'=>"-1", 'aria-hidden'=>"true"]) !!}
                            {{-- {!! Form::select('guarantee_zone_id',$zone, null, ['class' => 'form-control']) !!} --}}
                            
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('guarantee_woreda_id', 'guarantee Woreda:') !!}
                            {!! Form::select('guarantee_woreda_id',$woreda->prepend($person->guarantee->address->woreda->name ?? null, $person->guarantee->address->woreda->id ?? null), null, ['id'=>"guarantee_woreda_id", 'name'=>"guarantee_woreda_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"guarantee_woreda_id",'tabindex'=>"-1", 'aria-hidden'=>"true"]) !!}
                            {{-- {!! Form::select('guarantee_woreda_id',$woreda, null, ['class' => 'form-control']) !!} --}}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('guarantee_kebele_id', 'guarantee kebele:') !!}
                            {!! Form::select('guarantee_kebele_id',$kebele->prepend($person->guarantee->address->kebele->name ?? null, $person->guarantee->address->kebele->id ?? null), null, ['id'=>"guarantee_kebele_id", 'name'=>"guarantee_kebele_id",'class' => 'form-control select2-hidden-accessible','width'=>"50%",'data-select2-id'=>"guarantee_kebele_id",'tabindex'=>"-1", 'aria-hidden'=>"true"]) !!}
                            {{-- {!! Form::select('guarantee_kebele_id',$kebele, null, ['class' => 'form-control']) !!} --}}
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('guarantee_house_number', 'guarantee House Number:') !!}
                            {!! Form::text('guarantee_house_number', $person->guarantee->address->house_number ?? null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('guarantee_mobile', 'Guarantee mobile:') !!}
                            {!! Form::text('guarantee_mobile', $person->guarantee->mobile ?? null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    
                </div>
                
                
                
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>

    {{-- start add modal educational background --}}
    <div class="modal fade" id="ModalEditeducational" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Educational Background </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>
                {{-- @if (@isset($person->education))
                    {!! Form::model($person->education, ['route' => ['admin.education.update', collect($person->education)->first() ], 'method' => 'patch']) !!}
                    
                @else
                {!! Form::open(['route' => 'admin.education.store']) !!}
                    
                @endif --}}

                {{-- form --}}
                {!! Form::open(['route' => 'admin.education.store']) !!}
                
                
                <div class="row ">
                    
                            
                    {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('person_id', $person->id, ['class' => 'form-control','required']) !!}
                
                                                    
                    
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('study_field_id', 'Study Field:') !!}
                            {!! Form::select('study_field_id',$studyField, null, ['class' => 'form-control']) !!}
                            
                        </div>
                       
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('institution', 'Institution:') !!}
                            {!! Form::text('institution', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('qualification_id', 'Qualification Id:') !!}
                            {!! Form::select('qualification_id',$qualification, null, ['class' => 'form-control']) !!}
                            {{-- {!! Form::text('qualification_id', null, ['class' => 'form-control']) !!} --}}
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('graduation_date', 'Graduation Date:') !!}
                            {!! Form::text('graduation_date', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    
                </div>
                
                
                
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>

    {{-- start add modal work experience --}}
    <div class="modal fade" id="ModalAddWorkExperience" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Work Experience </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                {{-- form --}}
                {!! Form::open(['route' => 'admin.workExperiences.store']) !!}
                
                
                <div class="row ">
                    
                            
                    {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!}
                    {!! Form::hidden('person_id', $person->id, ['class' => 'form-control','required']) !!}
                
                                                    
                    
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('job_title', 'Job Title:') !!}
                            {!! Form::text('job_title', null, ['class' => 'form-control']) !!}
                            
                        </div>
                       
                    </div>
                    
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('organization', 'Organization:') !!}
                            {!! Form::text('organization', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('start_date', 'Start Date:') !!}
                            {!! Form::text('start_date',null, ['class' => 'form-control']) !!}
                            {{-- {!! Form::text('qualification_id', null, ['class' => 'form-control']) !!} --}}
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('end_date', 'End Date:') !!}
                            {!! Form::text('end_date', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    <div class="col-sm-6 col-xs-12 hris-sections">
                        <div class="form-group col-sm-12">
                            {!! Form::label('salary', 'Salary:') !!}
                            {!! Form::text('salary', null, ['class' => 'form-control']) !!}
                        </div>
                       
                    </div><!---->
                    
                </div>
                
                
                
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>
   
    
    




    {{-- tabs --}}
    <div class="col-md-6 col-lg-6 col-sm-6 col-12 my-2" style="margin-left: 6px; ">
        <div class="tabbable-panel bs-example">
            <div class="tabbable-line" >
                <ul class="nav nav-tabs " style="background: #fff; width: 202%; position: relative; margin-top: 20px; ">
                    <li class="nav-item">
                        <a href="#tab_default_1" data-toggle="tab" class="nav-link active" style="font-size: 18px">
                            Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_2" data-toggle="tab" class="nav-link" style="font-size: 18px">
                            Background </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_3" data-toggle="tab" class="nav-link"style="font-size: 18px">
                            Salary </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_4" data-toggle="tab" class="nav-link"style="font-size: 18px">
                            Leaves </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_5" data-toggle="tab" class="nav-link"style="font-size: 18px">
                            Document </a>
                    </li>
                </ul>
                <hr class="horizontalline">
                <div class="tab-content my-2" style=" width: 202%; position: relative;">
                    <div class="tab-pane  fade active show" id="tab_default_1">
                        <div id="accordion" class="mt-0">
                            <div class="card">
                                <div class="card-header" id="headingOne" style="background: #fff;">
                                    
                                    <span>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="text-success">
                                            
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Employement info</span>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-9 -->
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalEditEmployementInfo">
                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit professional info"></i>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-3 -->
                                            
                                        </div>                                   
                                    </span>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        {{-- teka defar abdi --}}
                                        <div class="card-section-title clearfix" style="padding: 16px 30px 10px;border-bottom: 2px solid #1b569e;box-sizing: border-box;display: block;font-family: wotfard;font-size: 14px;line-height: 1.5;color: #55687d;display: table;box-sizing: border-box;clear: both;display: table;box-sizing: border-box;font-weight: 700;">
                                            <div class="card-section-body">
                                                                                        
                                                <div class="row ">
                                                    
                                                    {{-- <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Employee ID: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->person_id ?? null !!}</span> </div>
                                                        
                                                        <hr>
                                                        
                                                    </div> --}}
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Job Position: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->jobPosition->position_id ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="clearfix"></div>
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Job Class: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->jobPosition->jobClass->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Work Unit: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->jobPosition->workUnit->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Work Unit Acronym: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->jobPosition->workUnit->acronym ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Office Level: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->jobPosition->workUnit->officeLevel->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Parent Work Unit: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->jobPosition->workUnit->parentworkunit->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Employement Type: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->employemetType->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Start Date: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! empty($person->employmentInformation->start_date) ? null : $person->employmentInformation->start_date->format('d/m/Y') ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Date of Exit: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! empty($person->employmentInformation->end_date) ? null : $person->employmentInformation->end_date->format('d/m/Y') ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-2">
                                <div class="card-header" id="headingTwo">
                                    <span>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="text-success">
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Personal info</span>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-9 -->
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalEdit">
                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit person"></i>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-3 -->
                                            
                                        </div>
                                        
                                    </span>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        {{-- teka defar personal info --}}
                                        <div class="card-section-title clearfix" style="padding: 16px 30px 10px;border-bottom: 2px solid #1b569e;box-sizing: border-box;display: block;font-family: wotfard;font-size: 14px;line-height: 1.5;color: #55687d;display: table;box-sizing: border-box;clear: both;display: table;box-sizing: border-box;font-weight: 700;">
                                            <div class="card-section-body">
                                                                                        
                                                <div class="row ">
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Full Name: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->title->name ?? null !!}  {!! $person->full_name ?? null !!}</span> </div>
                                                        
                                                        <hr>
                                                        
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Person ID: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->id_number ?? null !!}</span> </div>
                                                        
                                                        <hr>
                                                        
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Gender: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->gender->name ?? null !!}</span></div>
                                                        <hr>
                                                       
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Email: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->email ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="clearfix"></div>
                                                    {{-- <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Id Number: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->id_number ?? null !!}</span></div>
                                                        <hr>
                                                    </div> --}}
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Marital Status: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->meritalstatus->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Religion: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->religion->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Zone: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->address->zone->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Woreda: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->address->woreda->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Kebele: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->address->kebele->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">House Number: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->address->house_number ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Nationality: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->nationality ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Date Of Birth: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! empty($person->dob) ? null : Carbon\Carbon::parse($person->dob)->format('d/m/Y') ?? null!!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Birth Place: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->birth_place ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Mobile Number: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->mobile ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Mother Full Name: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->mother_full_name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Ethnic: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->ethnic->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Pension No: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->pension_no ?? null !!}</span> </div>
                                                        
                                                        <hr>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="card-header" id="headingThree">
                                    <span>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="text-success">
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Emergency contact</span></a>
                                            </div>
                                            <!-- /.col-lg-9 -->
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalEditEmergency">
                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit person"></i>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-3 -->
                                            
                                        </div>
                                        
                                    </span>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        {{-- teka defar emergency contact --}}
                                        <div class="card-section-title clearfix" style="padding: 16px 30px 10px;border-bottom: 2px solid #1b569e;box-sizing: border-box;display: block;font-family: wotfard;font-size: 14px;line-height: 1.5;color: #55687d;display: table;box-sizing: border-box;clear: both;display: table;box-sizing: border-box;font-weight: 700;">
                                            <div class="card-section-body">
                                                                                        
                                                <div class="row ">
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Full Name: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->emergency->full_name ?? null !!}</span> </div>
                                                        
                                                        <hr>
                                                        
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Mobile: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->emergency->mobile ?? null !!}</span></div>
                                                        <hr>
                                                       
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Relationship: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->emergency->relationship->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-4">
                                <div class="card-header" id="headingFour">
                                    <span>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="text-success">
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Guarantee</span></a>
                                            </div>
                                            <!-- /.col-lg-9 -->
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalEditGuarantee">
                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit person"></i>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-3 -->
                                            
                                        </div>
                                        
                                    </span>
                                </div>
                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        {{-- teka defar personal info --}}
                                        <div class="card-section-title clearfix" style="padding: 16px 30px 10px;border-bottom: 2px solid #1b569e;box-sizing: border-box;display: block;font-family: wotfard;font-size: 14px;line-height: 1.5;color: #55687d;display: table;box-sizing: border-box;clear: both;display: table;box-sizing: border-box;font-weight: 700;">
                                            <div class="card-section-body">
                                                                                        
                                                <div class="row ">
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Full Name: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->guarantee->full_name ?? null !!}</span> </div>
                                                        
                                                        <hr>
                                                        
                                                    </div>
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Zone: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->guarantee->address->zone->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Woreda: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->guarantee->address->woreda->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Kebele: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->guarantee->address->kebele->name ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">House Number: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->guarantee->address->house_number ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Mobile Number: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->guarantee->mobile ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_default_2">
                        <div id="accordion1">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <span>

                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="text-success">
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Educational Background</span></a>
                                            </div>
                                            
                                            {{-- modal education caller --}}
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalEditeducational">
                                                    <i class="fa fa-plus" data-name="add" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="add educational background"></i>add
                                                </a>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </span>
                                </div>
                                <div id="collapseFive" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion1">
                                    <div class="card-body">
                                        {{-- start table --}}

                                        <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
                                            <table class="table table-striped table-bordered" id="people-table" width="100%">
                                                <thead>
                                                 <tr>
                                                    <th>Study Field</th>
                                                    <th>Institution</th>
                                                    <th>Qualification</th>
                                                    <th>Graduation Date</th>
                                            
                                                    <th >Action</th>
                                                 </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($person->education as $person->education)
                                                        <div class="modal fade" id="ModalEditeducational{{$person->education->id}}" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Educational Background </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                    
                                                                        </button>
                                                    
                                                                    </div>
                                                                    @if (@isset($person->education))
                                                                        {!! Form::model($person->education, ['route' => ['admin.education.update', collect($person->education)->first() ], 'method' => 'patch']) !!}
                                                                        
                                                                    @else
                                                                    {!! Form::open(['route' => 'admin.education.store']) !!}
                                                                        
                                                                    @endif
                                                    
                                                                    {{-- form --}}
                                                                    
                                                                    
                                                                    <div class="row ">
                                                                        {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!}
                                                                       
                                                                        <div class="col-sm-6 col-xs-12 hris-sections">
                                                                            <div class="form-group col-sm-12">
                                                                                {!! Form::label('study_field_id', 'Study Field:') !!}
                                                                                {!! Form::select('study_field_id',$studyField, null, ['class' => 'form-control']) !!}
                                                                                
                                                                            </div>
                                                                        
                                                                        </div>
                                                                        <div class="col-sm-6 col-xs-12 hris-sections">
                                                                            <div class="form-group col-sm-12">
                                                                                {!! Form::label('institution', 'Institution:') !!}
                                                                                {!! Form::text('institution', null, ['class' => 'form-control']) !!}
                                                                            </div>
                                                                        
                                                                        </div><!---->
                                                                        <div class="col-sm-6 col-xs-12 hris-sections">
                                                                            <div class="form-group col-sm-12">
                                                                                {!! Form::label('qualification_id', 'Qualification Id:') !!}
                                                                                {!! Form::select('qualification_id',$qualification, null, ['class' => 'form-control']) !!}
                                                                                {{-- {!! Form::text('qualification_id', null, ['class' => 'form-control']) !!} --}}
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-sm-6 col-xs-12 hris-sections">
                                                                            <div class="form-group col-sm-12">
                                                                                {!! Form::label('graduation_datee', 'Graduation Date:') !!}
                                                                                {!! Form::text('graduation_datee', empty($person->education->graduation_date) ? null : $person->education->graduation_date->format('d/m/Y') ?? null, ['id'=>'graduation_datee','name'=>'graduation_datee','class' => 'form-control']) !!}
                                                                            </div>
                                                                        
                                                                        </div><!---->
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                    <div class="form-group col-sm-12 text-center">
                                                                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                                                        <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                                                                    </div>
                                                    
                                                                    {!! Form::close() !!}
                                                    
                                                                </div>
                                                    
                                                            </div>
                                                    
                                                        </div>
                                                        <tr data-href="{{URL::to('admin/people',collect($person)->first())}}">
                                                            <td>{!! $person->education->studyField->name ?? null !!}</td>
                                                            <td>{!! $person->education->institution ?? null !!}</td>
                                                            <td>{!! $person->education->qualification->name ?? null !!}</td>
                                                            <td>{!! empty($person->education->graduation_date) ? null : $person->education->graduation_date->format('d/m/Y') ?? null!!}</td>
                                                            
                                                            <td>
                                                                <a href="#" data-toggle="modal" id="education_edit_link" data-target="#ModalEditeducational{{$person->education->id}}">
                                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit person"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-2">
                                <div class="card-header" id="headingFour">
                                    <span>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapsesix" class="text-success">
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Work Experience</span></a>
                                            </div>
                                            <!-- /.col-lg-9 -->
                                            {{-- modal education caller --}}
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalAddWorkExperience">
                                                    <i class="fa fa-plus" data-name="add" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="add educational background"></i>add
                                                </a>
                                            </div>
                                            <!-- /.col-lg-3 -->
                                            
                                        </div>
                                        
                                    </span>
                                </div>
                                <div id="collapsesix" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion1">
                                    <div class="card-body">
                                        {{-- start table --}}

                                        <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
                                            <table class="table table-striped table-bordered" id="workexperience-table" width="100%">
                                                <thead>
                                                 <tr>
                                                    <th>Job Title</th>
                                                    <th>Organization</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Salary</th>
                                            
                                                    <th >Action</th>
                                                 </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($person->workExperience as $person->workExperience)
                                                <div class="modal fade" id="ModalAddWorkExperience{{$person->workExperience->id}}" role="dialog" aria-labelledby="exampleModalLbel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add Work Experience </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                            
                                                                </button>
                                            
                                                            </div>
                                            
                                                            {{-- form --}}
                                                            {!! Form::model($person->workExperience, ['route' => ['admin.workExperiences.update', collect($person->workExperience)->first() ], 'method' => 'patch']) !!}
                                                            
                                                            
                                                            
                                                            <div class="row ">
                                                                
                                                                        
                                                                {!! Form::hidden('id', $person->id, ['class' => 'form-control','required']) !!}
                                                                {!! Form::hidden('person_id', $person->id_number, ['class' => 'form-control','required']) !!}
                                                            
                                                                                                
                                                                
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group col-sm-12">
                                                                        {!! Form::label('job_title', 'Job Title:') !!}
                                                                        {!! Form::text('job_title', null, ['class' => 'form-control']) !!}
                                                                        
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group col-sm-12">
                                                                        {!! Form::label('organization', 'Organization:') !!}
                                                                        {!! Form::text('organization', null, ['class' => 'form-control']) !!}
                                                                    </div>
                                                                   
                                                                </div><!---->
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group col-sm-12">
                                                                        {!! Form::label('start_datee', 'Start Date:') !!}
                                                                        {!! Form::text('start_datee', empty($person->workExperience->start_date) ? null : $person->workExperience->start_date->format('d/m/Y') ?? null, ['class' => 'form-control']) !!}
                                                                        {{-- {!! Form::text('qualification_id', null, ['class' => 'form-control']) !!} --}}
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group col-sm-12">
                                                                        {!! Form::label('end_datee', 'End Date:') !!}
                                                                        {!! Form::text('end_datee', empty($person->workExperience->end_date) ? null : $person->workExperience->end_date->format('d/m/Y') ?? null, ['class' => 'form-control']) !!}
                                                                    </div>
                                                                   
                                                                </div><!---->
                                                                <div class="col-sm-6 col-xs-12 hris-sections">
                                                                    <div class="form-group col-sm-12">
                                                                        {!! Form::label('salary', 'Salary:') !!}
                                                                        {!! Form::text('salary', null, ['class' => 'form-control']) !!}
                                                                    </div>
                                                                   
                                                                </div><!---->
                                                                
                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="form-group col-sm-12 text-center">
                                                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                                                <a href="{!! route('admin.people.index') !!}" class="btn btn-secondary">Cancel</a>
                                                            </div>
                                            
                                                            {!! Form::close() !!}
                                            
                                                        </div>
                                            
                                                    </div>
                                            
                                                </div>
                                                    <tr data-href="{{URL::to('admin/people',collect($person)->first())}}">
                                                        <td>{!! $person->workExperience->job_title ?? null !!}</td>
                                                        <td>{!! $person->workExperience->organization ?? null !!}</td>
                                                        <td>{!! empty($person->workExperience->start_date) ? null : $person->workExperience->start_date->format('d/m/Y') ?? null !!}</td>
                                                        <td>{!! empty($person->workExperience->end_date) ? null : $person->workExperience->end_date->format('d/m/Y') ?? null!!}</td>
                                                        <td>{!! $person->workExperience->salary ?? null!!}</td>
                                                        
                                                        <td>
                                                            <a href="#" data-toggle="modal" id="education_edit_link" data-target="#ModalAddWorkExperience{{$person->workExperience->id}}">
                                                                <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit person"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            </div>


                                        {{-- end table --}}
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_default_3">
                        <div id="accordion1">
                            <div class="card">
                                <div class="card-header" id="headingOne" style="background: #fff;">
                                    
                                    <span>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="text-success">
                                            
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Current Salary</span>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-9 -->
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalEditsalary">
                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit professional info"></i>
                                                </a>
                                            </div>
                                            <!-- /.col-lg-3 -->
                                            
                                        </div>                                   
                                    </span>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        {{-- teka defar abdi --}}
                                        <div class="card-section-title clearfix" style="padding: 16px 30px 10px;border-bottom: 2px solid #1b569e;box-sizing: border-box;display: block;font-family: wotfard;font-size: 14px;line-height: 1.5;color: #55687d;display: table;box-sizing: border-box;clear: both;display: table;box-sizing: border-box;font-weight: 700;">
                                            <div class="card-section-body">
                                                                                        
                                                <div class="row ">
                                                    
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Basic Salary: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->basic_salary ?? null !!}</span> </div>
                                                        
                                                        <hr>
                                                        
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Allowance: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->allowance ?? null !!}</span></div>
                                                        <hr>
                                                       
                                                    </div><!---->
                                                    <div class="col-sm-6 col-xs-12 hris-sections">
                                                        <div class="card-section-label">Gross salary: <span style="margin-left: 9px; color: #000; font-size: 18px;">{!! $person->employmentInformation->basic_salary + $person->employmentInformation->allowance ?? null !!}</span></div>
                                                        <hr>
                                                    </div><!---->
                                                    <div class="clearfix"></div>
                                                    
                                                    
                                                    
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-2">
                                <div class="card-header" id="headingThreee">
                                    <span>

                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                                <a data-toggle="collapse" data-target="#collapseFivee" aria-expanded="false" aria-controls="collapseFivee" class="text-success">
                                                    <span class=" fa fa-minus"></span>
                                                    <span class="crsr">Salary History</span></a>
                                            </div>
                                            
                                            {{-- modal education caller --}}
                                            {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                <a href="#" data-toggle="modal" data-target="#ModalEditeducational">
                                                    <i class="fa fa-plus" data-name="add" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="add educational background"></i>add
                                                </a>
                                            </div> --}}
                                            
                                            
                                        </div>
                                        
                                    </span>
                                </div>
                                <div id="collapseFivee" class="collapse show" aria-labelledby="headingThreee" data-parent="#accordion1">
                                    <div class="card-body">
                                        {{-- start table --}}

                                        <div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
                                            <table class="table table-striped table-bordered" id="people-table2" width="100%">
                                                <thead>
                                                 <tr>
                                                    <th>basic_salary</th>
                                                    <th>allowance</th>
                                                    <th>work unit</th>
                                                    <th>job class</th>
                                                    <th>job position</th>
                                                    <th>updated date</th>
                                                    <th>reason</th>
                                            
                                                    {{-- <th >Action</th> --}}
                                                 </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($person->salaryHistory as $person->salaryHistory)
                                                        
                                                        <tr data-href="{{URL::to('admin/people',collect($person)->first())}}">
                                                            <td>{!! $person->salaryHistory->basic_salary ?? null !!}</td>
                                                            <td>{!! $person->salaryHistory->allowance ?? null !!}</td>
                                                            <td>{!! $person->salaryHistory->work_unit ?? null !!}</td>
                                                            <td>{!! $person->salaryHistory->job_class ?? null !!}</td>
                                                            <td>{!! $person->salaryHistory->job_postion ?? null !!}</td>
                                                            <td>{!! empty($person->salaryHistory->date) ? null : $person->salaryHistory->date->format('d/m/Y')!!}</td>
                                                            {{-- <td>{!! $person->salaryHistory->date ?? null!!}</td> --}}
                                                            <td>{!! $person->salaryHistory->reasonForSalary->name ?? null!!}</td>
                                                            
                                                            {{-- <td>
                                                                <a href="#" data-toggle="modal" id="education_edit_link" data-target="#ModalEditeducational{{$person->education->id}}">
                                                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit person"></i>
                                                                </a>
                                                            </td> --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <a href="{!! route('admin.people.index') !!}" class="btn btn-warning mt-2">Back</a>
     </div>
    </div>

</section>











@stop

{{-- page level scripts --}}

@section('footer_scripts')

<script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/daterangepicker/js/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/clockface/js/clockface.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/datepicker.js') }}" type="text/javascript"></script>

{{-- select 2 script --}}
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


 

    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>

<!-- page level js starts-->
<script type="text/javascript" src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
<!--<script type="text/javascript" src="{{ asset('vendors/modal/js/classie.js') }}"></script>-->
<!--<script type="text/javascript" src="{{ asset('vendors/modal/js/modalEffects.js') }}"></script>-->
<script type="text/javascript" src="{{ asset('vendors/switchery/js/switchery.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/advfeatures.js') }}"></script>
<!--page level js ends-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

 <script>
    $('#people-table').DataTable({
                  responsive: true,
                  pageLength: 10
              });
              $('#people-table').on( 'page.dt', function () {
                 setTimeout(function(){
                       $('.livicon').updateLivicon();
                 },500);
              } );
              $('#people-table').on( 'length.dt', function ( e, settings, len ) {
                 setTimeout(function(){
                        $('.livicon').updateLivicon();
                 },500);
              } );

              $('#delete_confirm').on('show.bs.modal', function (event) {
                  var button = $(event.relatedTarget)
                   var $recipient = button.data('id');
                  var modal = $(this);
                  modal.find('.modal-footer a').prop("href",$recipient);
              })

   </script>



<script>
    $('#people-table2').DataTable({
                  responsive: true,
                  pageLength: 10
              });
              $('#people-table2').on( 'page.dt', function () {
                 setTimeout(function(){
                       $('.livicon').updateLivicon();
                 },500);
              } );
              $('#people-table2').on( 'length.dt', function ( e, settings, len ) {
                 setTimeout(function(){
                        $('.livicon').updateLivicon();
                 },500);
              } );

              $('#delete_confirm').on('show.bs.modal', function (event) {
                  var button = $(event.relatedTarget)
                   var $recipient = button.data('id');
                  var modal = $(this);
                  modal.find('.modal-footer a').prop("href",$recipient);
              })

   </script>
   
   <script>
    $('#workexperience-table').DataTable({
                  responsive: true,
                  pageLength: 10
              });
              $('#workexperience-table').on( 'page.dt', function () {
                 setTimeout(function(){
                       $('.livicon').updateLivicon();
                 },500);
              } );
              $('#workexperience-table').on( 'length.dt', function ( e, settings, len ) {
                 setTimeout(function(){
                        $('.livicon').updateLivicon();
                 },500);
              } );

              $('#delete_confirm').on('show.bs.modal', function (event) {
                  var button = $(event.relatedTarget)
                   var $recipient = button.data('id');
                  var modal = $(this);
                  modal.find('.modal-footer a').prop("href",$recipient);
              })

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
 

{{-- salary --}}

<script>
    $(document).ready(function () {
        $('#salaryworkunit_dd').on('change', function () {
            var idWorkunit = this.value;
            $("#salaryjobclass_dd").html('');
            $.ajax({
                url: "{{url('api/fetch-jobclass')}}",
                type: "POST",
                data: {
                    workunit_id: idWorkunit,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#salaryjobclass_dd').html('<option value="">Select Job Class</option>');
                    $.each(result.jobclass, function (key, value) {
                        $("#salaryjobclass_dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#salarypositionid_dd').html('<option value="">Select Position</option>');
                }
            });
        });
        $('#salaryjobclass_dd').on('change', function () {
            var idJobclass = this.value;
            var idWorkunit = salaryworkunit_dd.value;
            $("#salarypositionid_dd").html('');
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
                    $('#salarypositionid_dd').html('<option value="">Select Position</option>');
                    $.each(res.positionid, function (key, value) {
                        $("#salarypositionid_dd").append('<option value="' + value
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
    $('#graduation_date').calendarsPicker({calendar: calendar});
    $('#start_date').calendarsPicker({calendar: calendar});
    $('#end_date').calendarsPicker({calendar: calendar}); 
    $('#wstart_date').calendarsPicker({calendar: calendar});
    $('#wend_date').calendarsPicker({calendar: calendar}); 
    $('#salarydate').calendarsPicker({calendar: calendar});
    
    
});

</script> 
<script>
    $('body').on('focus','#graduation_datee',function(){
        var calendar = $.calendars.instance('ethiopian','am');
        $(this).calendarsPicker({calendar: calendar});
    })
</script>

<script>
    $('body').on('focus','#start_datee',function(){
        var calendar = $.calendars.instance('ethiopian','am');
        $(this).calendarsPicker({calendar: calendar});
    })
</script>

<script>
    $('body').on('focus','#end_datee',function(){
        var calendar = $.calendars.instance('ethiopian','am');
        $(this).calendarsPicker({calendar: calendar});
    })
</script>


@stop


