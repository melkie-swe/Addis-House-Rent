<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $leave->id !!}</p>
    <hr>
</div>

<!-- Person Id Field -->
<div class="form-group">
    {!! Form::label('person_id', 'Person Id:') !!}
    <p>{!! $leave->person_id !!}</p>
    <hr>
</div>

<!-- Leave Type Id Field -->
<div class="form-group">
    {!! Form::label('leave_type_id', 'Leave Type Id:') !!}
    <p>{!! $leave->leave_type_id !!}</p>
    <hr>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{!! $leave->start_date !!}</p>
    <hr>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{!! $leave->end_date !!}</p>
    <hr>
</div>

<!-- Remark Field -->
<div class="form-group">
    {!! Form::label('remark', 'Remark:') !!}
    <p>{!! $leave->remark !!}</p>
    <hr>
</div>

