<!-- Person Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('person_id', 'Person Id:') !!}
    {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Position Id Field -->

<div class="form-group col-sm-12">
    {!! Form::label('position_id', 'Job Position:') !!}
    {!! Form::text('position_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('job_class_id', 'Job Class:') !!}
    {!! Form::select('job_class_id',$jobClass, null, ['class' => 'form-control']) !!}
    {{-- {!! Form::text('job_position_id', null, ['class' => 'form-control']) !!} --}}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('work_unit_name', 'Work Unit:') !!}
    {!! Form::text('work_unit_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('work_unit_name_am', 'Work Unit Am:') !!}
    {!! Form::text('work_unit_name_am', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('work_unit_acronym', 'Work Unit Acronym:') !!}
    {!! Form::text('work_unit_acronym', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('work_unit_acronym_am', 'Work Unit Acronym Am:') !!}
    {!! Form::text('work_unit_acronym_am', null, ['class' => 'form-control']) !!}
</div>
 

        {{-- office level --}}
<div class="form-group col-sm-12">
    {!! Form::label('office_level_name', 'Office level:') !!}
    {!! Form::text('office_level_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('office_level_name_am', 'Office level Am:') !!}
    {!! Form::text('office_level_name_am', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('work_unit_id', 'Work Unit Id:') !!}
    {!! Form::text('work_unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Field -->
<div class="form-group col-sm-12">
    {!! Form::label('salary', 'Salary:') !!}
    {!! Form::text('salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::text('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::text('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.employmentInformations.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
