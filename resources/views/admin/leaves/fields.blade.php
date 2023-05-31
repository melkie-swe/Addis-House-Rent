<!-- Person Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('person_id', 'Person Id:') !!}
    {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Leave Type Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('leave_type_id', 'Leave Type Id:') !!}
    {!! Form::text('leave_type_id', null, ['class' => 'form-control']) !!}
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

<!-- Remark Field -->
<div class="form-group col-sm-12">
    {!! Form::label('remark', 'Remark:') !!}
    {!! Form::text('remark', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.leaves.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
