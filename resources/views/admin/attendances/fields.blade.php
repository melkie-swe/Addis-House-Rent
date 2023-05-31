<!-- Person Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('person_id', 'Person Id:') !!}
    {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Leave Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('leave_type', 'Leave Type:') !!}
    {!! Form::text('leave_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Half Day Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('half_day_type', 'Half Day Type:') !!}
    {!! Form::text('half_day_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Updated By Field -->
<div class="form-group col-sm-12">
    {!! Form::label('last_updated_by', 'Last Updated By:') !!}
    {!! Form::text('last_updated_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Reason Field -->
<div class="form-group col-sm-12">
    {!! Form::label('reason', 'Reason:') !!}
    {!! Form::text('reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Application Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('application_status', 'Application Status:') !!}
    {!! Form::text('application_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Applied On Field -->
<div class="form-group col-sm-12">
    {!! Form::label('applied_on', 'Applied On:') !!}
    {!! Form::text('applied_on', null, ['class' => 'form-control']) !!}
</div>

<!-- Clock In Field -->
<div class="form-group col-sm-12">
    {!! Form::label('clock_in', 'Clock In:') !!}
    {!! Form::text('clock_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Clock Out Field -->
<div class="form-group col-sm-12">
    {!! Form::label('clock_out', 'Clock Out:') !!}
    {!! Form::text('clock_out', null, ['class' => 'form-control']) !!}
</div>

<!-- Clock In Ip Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('clock_in_ip_address', 'Clock In Ip Address:') !!}
    {!! Form::text('clock_in_ip_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Clock Out Ip Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('clock_out_ip_address', 'Clock Out Ip Address:') !!}
    {!! Form::text('clock_out_ip_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Working From Field -->
<div class="form-group col-sm-12">
    {!! Form::label('working_from', 'Working From:') !!}
    {!! Form::text('working_from', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Late Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_late', 'Is Late:') !!}
    {!! Form::text('is_late', null, ['class' => 'form-control']) !!}
</div>

<!-- Office Start Time Field -->
<div class="form-group col-sm-12">
    {!! Form::label('office_start_time', 'Office Start Time:') !!}
    {!! Form::text('office_start_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Office End Time Field -->
<div class="form-group col-sm-12">
    {!! Form::label('office_end_time', 'Office End Time:') !!}
    {!! Form::text('office_end_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.attendances.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
