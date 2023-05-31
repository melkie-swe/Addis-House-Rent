<!-- Person Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('person_id', 'Person Id:') !!}
    {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('job_title', 'Job Title:') !!}
    {!! Form::text('job_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Title Am Field -->
<div class="form-group col-sm-12">
    {!! Form::label('job_title_am', 'Job Title Am:') !!}
    {!! Form::text('job_title_am', null, ['class' => 'form-control']) !!}
</div>

<!-- Organization Field -->
<div class="form-group col-sm-12">
    {!! Form::label('organization', 'Organization:') !!}
    {!! Form::text('organization', null, ['class' => 'form-control']) !!}
</div>

<!-- Organization Am Field -->
<div class="form-group col-sm-12">
    {!! Form::label('organization_am', 'Organization Am:') !!}
    {!! Form::text('organization_am', null, ['class' => 'form-control']) !!}
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

<!-- Salary Field -->
<div class="form-group col-sm-12">
    {!! Form::label('salary', 'Salary:') !!}
    {!! Form::text('salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.workExperiences.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
