<!-- Zone Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('zone_id', 'Zone Id:') !!}
    {!! Form::text('zone_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Woreda Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('woreda_id', 'Woreda Id:') !!}
    {!! Form::text('woreda_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Kebele Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kebele_id', 'Kebele Id:') !!}
    {!! Form::text('kebele_id', null, ['class' => 'form-control']) !!}
</div>

<!-- House Number Field -->
<div class="form-group col-sm-12">
    {!! Form::label('house_number', 'House Number:') !!}
    {!! Form::text('house_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.addresses.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
