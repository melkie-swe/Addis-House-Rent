<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $education->id !!}</p>
    <hr>
</div>

<!-- Person Id Field -->
<div class="form-group">
    {!! Form::label('person_id', 'Person Id:') !!}
    <p>{!! $education->person_id !!}</p>
    <hr>
</div>

<!-- Study Field Id Field -->
<div class="form-group">
    {!! Form::label('study_field_id', 'Study Field:') !!}
    <p>{!! $education->studyField->name !!}</p>
    <hr>
</div>

<!-- Institution Field -->
<div class="form-group">
    {!! Form::label('institution', 'Institution:') !!}
    <p>{!! $education->institution !!}</p>
    <hr>
</div>

<!-- Institution Am Field -->
<div class="form-group">
    {!! Form::label('institution_am', 'Institution Am:') !!}
    <p>{!! $education->institution_am !!}</p>
    <hr>
</div>

<!-- Graduation Date Field -->
<div class="form-group">
    {!! Form::label('graduation_date', 'Graduation Date:') !!}
    <p>{!! $education->graduation_date !!}</p>
    <hr>
</div>

<!-- Qualification Id Field -->
<div class="form-group">
    {!! Form::label('qualification_id', 'Qualification:') !!}
    <p>{!! $education->qualification->name !!}</p>
    <hr>
</div>

