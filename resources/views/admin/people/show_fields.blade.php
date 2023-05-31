







<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $person->id !!}</p>
    <hr>
</div>

<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{!! $person->full_name !!}</p>
    <hr>
</div>

<!-- Full Name Am Field -->
<div class="form-group">
    {!! Form::label('full_name_am', 'Full Name Am:') !!}
    <p>{!! $person->full_name_am !!}</p>
    <hr>
</div>

<!-- Title Id Field -->
<div class="form-group">
    {!! Form::label('title_id', 'Title Id:') !!}
    <p>{!! $person->title->name !!}</p>
    <hr>
</div>

<!-- Gender Id Field -->
<div class="form-group">
    {!! Form::label('gender_id', 'Gender:') !!}
    <p>{!! $person->gender->name !!}</p>

    <hr>
</div>

<!-- Marital Status Id Field -->
<div class="form-group">
    {!! Form::label('marital_status_id', 'Marital Status:') !!}
    <p>{!! $person->meritalstatus->name !!}</p>
    <hr>
</div>

<!-- Religion Id Field -->
<div class="form-group">
    {!! Form::label('religion_id', 'Religion Id:') !!}
    <p>{!! $person->religion->name !!}</p>
    
    <hr>
</div>

<!-- Address Id Field -->
<div class="form-group">
    {!! Form::label('address_id', 'Zone:') !!}

    <p>{!! $person->address->zone->name !!}</p>
    
    <hr>
</div>
<div class="form-group">
    {!! Form::label('address_id', 'Woreda:') !!}
    <p>{!! $person->address->woreda->name !!}</p>

    <hr>
</div>
<div class="form-group">
    {!! Form::label('address_id', 'Kebele:') !!}
    <p>{!! $person->address->kebele->name !!}</p>

    
    <hr>
</div>

<div class="form-group">
    {!! Form::label('address_id', 'House Number:') !!}
    <p>{!! $person->address->house_number !!}</p>
    
    <hr>
</div>

<!-- Emergency Contact Id Field -->
<div class="form-group">
    {!! Form::label('emergency_contact_id', 'Emergency Contact Name:') !!}

    <p>{!! $person->emergency->full_name !!}</p>
   
    
    <hr>
</div>
<div class="form-group">
    {!! Form::label('emergency_contact_id', 'Emergency Contact Name Am:') !!}
    <p>{!! $person->emergency->full_name_am !!}</p>
    <hr>
</div>
<div class="form-group">
    {!! Form::label('emergency_contact_id', 'Emergency Contact Relationship:') !!}
   
    <p>{!! $person->emergency->relationship->name !!}</p>
    
    
    <hr>
</div>
<div class="form-group">
    {!! Form::label('emergency_contact_id', 'Emergency Contact Mobile:') !!}
    <p>{!! $person->emergency->mobile !!}</p>
    
    <hr>
</div>

<!-- Guarantee Id Field -->

<div class="form-group">
    {!! Form::label('guarantee_id', 'Guarantee Full name:') !!}
    <p>{!! $person->guarantee->full_name !!}</p>
    
    <hr>
</div>
<div class="form-group">
    {!! Form::label('guarantee_id', 'Guarantee Full name Am:') !!}
    <p>{!! $person->guarantee->full_name_am !!}</p>
    <hr>
</div>
{{-- guarantee address --}}


<div class="form-group">
    {!! Form::label('address_id', 'Guarantee Zone:') !!}
    
    <p>{!! $person->guarantee->address->zone->name !!}</p>
    
    
    <hr>
</div>
<div class="form-group">
    {!! Form::label('address_id', 'Guarantee Woreda:') !!}
    
    <p>{!! $person->guarantee->address->woreda->name !!}</p>
    
    
    <hr>
</div>
<div class="form-group">
    {!! Form::label('address_id', 'Guarantee Kebele:') !!}
   
    <p>{!! $person->guarantee->address->kebele->name !!}</p> 
    <hr>
</div>

<div class="form-group">
    {!! Form::label('address_id', 'Guarantee House Number:') !!}
    <p>{!! $person->guarantee->address->house_number !!}</p>
    <hr>
</div>




{{-- guarantee mobile --}}
<div class="form-group">
    {!! Form::label('guarantee_id', 'Guarantee Mobile:') !!}
    <p>{!! $person->guarantee->mobile !!}</p>
    <hr>
</div>

<!-- Nationality Field -->
<div class="form-group">
    {!! Form::label('nationality', 'Nationality:') !!}
    <p>{!! $person->nationality !!}</p>
    <hr>
</div>

<!-- Nationality Am Field -->
<div class="form-group">
    {!! Form::label('nationality_am', 'Nationality Am:') !!}
    <p>{!! $person->nationality_am !!}</p>
    <hr>
</div>

<!-- Dob Field -->
<div class="form-group">
    {!! Form::label('dob', 'Dob:') !!}
    <p>{!! $person->dob !!}</p>
    <hr>
</div>

<!-- Birth Place Field -->
<div class="form-group">
    {!! Form::label('birth_place', 'Birth Place:') !!}
    <p>{!! $person->birth_place !!}</p>
    <hr>
</div>

<!-- Birth Place Am Field -->
<div class="form-group">
    {!! Form::label('birth_place_am', 'Birth Place Am:') !!}
    <p>{!! $person->birth_place_am !!}</p>
    <hr>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $person->email !!}</p>
    <hr>
</div>

<!-- Mobile Field -->
<div class="form-group">
    {!! Form::label('mobile', 'Mobile:') !!}
    <p>{!! $person->mobile !!}</p>
    <hr>
</div>

<!-- Id Number Field -->
<div class="form-group">
    {!! Form::label('id_number', 'Id Number:') !!}
    <p>{!! $person->id_number !!}</p>
    <hr>
</div>

<!-- mother full name Field -->
<div class="form-group">
    {!! Form::label('mother_full_name_am', 'Mother Full Name:') !!}
    <p>{!! $person->mother_full_name !!}</p>
    <hr>
</div>

<!-- mother full name am Field -->
<div class="form-group">
    {!! Form::label('mother_full_name_am', 'Mother Full Name Am:') !!}
    <p>{!! $person->mother_full_name_am !!}</p>
    <hr>
</div>


<!-- ethnic Field -->
<div class="form-group">
    {!! Form::label('ethnic', 'Ethnic:') !!}
    <p>{!! $person->ethnic->name !!}</p>
    <hr>
</div>
