<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Am Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name_am', 'Name Am:') !!}
    {!! Form::text('name_am', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.maritalStatuses.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
