<!-- Person Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('person_id', 'Person Id:') !!}
    {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Field -->
<div class="form-group col-sm-12">
    {!! Form::label('salary', 'Salary:') !!}
    {!! Form::text('salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Salary Field -->
<div class="form-group col-sm-12">
    {!! Form::label('current_salary', 'Current Salary:') !!}
    {!! Form::text('current_salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.salaryHistories.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
