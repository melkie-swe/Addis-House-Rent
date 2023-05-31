<div class="row">
    {{-- <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('position_id', 'Position Id:') !!}
            {!! Form::text('position_id', null, ['class' => 'form-control']) !!}
        </div>
    
    </div> --}}
    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('job_class_id', 'Job Class:') !!}
            {!! Form::select('job_class_id',$jobclass->prepend($jobPosition->jobClass->name ?? null, $jobPosition->jobClass->id ?? null), null, ['class' => 'form-control']) !!}
            
        </div>
    
    </div>
    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('work_unit_id', 'Work Unit:') !!}
            {!! Form::select('work_unit_id',$workunit->prepend($jobPosition->workUnit->name ?? null, $jobPosition->workUnit->id ?? null), null, ['class' => 'form-control']) !!}
            
        </div>
    
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.jobPositions.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
