<div class="row">
    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    
    </div>

    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('name_am', 'Name Am:') !!}
            {!! Form::text('name_am', null, ['class' => 'form-control']) !!}
        </div>
    
    </div>

    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('acronym', 'Acronym:') !!}
            {!! Form::text('acronym', null, ['class' => 'form-control']) !!}
        </div>
        
    
    </div>

    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('acronym_am', 'Acronym Am:') !!}
            {!! Form::text('acronym_am', null, ['class' => 'form-control']) !!}
        </div>
        
    
    </div>

    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('office_level_id', 'Office Level:') !!}
            {!! Form::select('office_level_id',$officelevel->prepend($workUnit->officeLevel->name ?? null, $workUnit->officeLevel->id ?? null), null, ['class' => 'form-control']) !!}
        </div>
    
    </div>

    <div class="col-sm-6 col-xs-12 hris-sections">
        <div class="form-group col-sm-12">
            {!! Form::label('work_unit_id', 'Parent Work Unit:') !!}
            {!! Form::select('work_unit_id',$parentworkunit->prepend($workUnit->parentworkunit->name ?? null, $workUnit->parentworkunit->id ?? null) ,null, ['class' => 'form-control']) !!}
        </div>
    
    </div>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.workUnits.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
