<!-- Full Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Number Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_number', 'Id Number:') !!}
    {!! Form::text('id_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    {!! Form::text('date_of_birth', null, ['class' => 'form-control']) !!}
</div>

<!-- Qualification Field -->
<div class="form-group col-sm-12">
    {!! Form::label('qualification', 'Qualification:') !!}
    {!! Form::text('qualification', null, ['class' => 'form-control']) !!}
</div>

<!-- Education Background Field -->
<div class="form-group col-sm-12">
    {!! Form::label('education_background', 'Education Background:') !!}
    {!! Form::text('education_background', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Of Employment Field -->
<div class="form-group col-sm-12">
    {!! Form::label('year_of_employment', 'Year Of Employment:') !!}
    {!! Form::text('year_of_employment', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Postion Field -->
<div class="form-group col-sm-12">
    {!! Form::label('current_postion', 'Current Postion:') !!}
    {!! Form::text('current_postion', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Salary Field -->
<div class="form-group col-sm-12">
    {!! Form::label('current_salary', 'Current Salary:') !!}
    {!! Form::text('current_salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Of Employee Field -->
<div class="form-group col-sm-12">
    {!! Form::label('type_of_employee', 'Type Of Employee:') !!}
    {!! Form::text('type_of_employee', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Number Field -->
<div class="form-group col-sm-12">
    {!! Form::label('mobile_number', 'Mobile Number:') !!}
    {!! Form::text('mobile_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.employmentProfiles.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
