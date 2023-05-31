<!-- Person Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('person_id', 'Person Id:') !!}
    {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Study Field Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('study_field_id', 'Study Field Id:') !!}
    {!! Form::select('study_field_id',$studyField, null, ['class' => 'form-control']) !!}
    {{-- {!! Form::text('study_field_id', null, ['class' => 'form-control']) !!} --}}
</div>

<!-- Institution Field -->
<div class="form-group col-sm-12">
    {!! Form::label('institution', 'Institution:') !!}
    {!! Form::text('institution', null, ['class' => 'form-control']) !!}
</div>

<!-- Institution Am Field -->
<div class="form-group col-sm-12">
    {!! Form::label('institution_am', 'Institution Am:') !!}
    {!! Form::text('institution_am', null, ['class' => 'form-control']) !!}
</div>

<!-- Graduation Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('graduation_date', 'Graduation Date:') !!}
    {!! Form::text('graduation_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Qualification Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('qualification_id', 'Qualification Id:') !!}
    {!! Form::select('qualification_id',$qualification, null, ['class' => 'form-control']) !!}
    {{-- {!! Form::text('qualification_id', null, ['class' => 'form-control']) !!} --}}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.education.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
