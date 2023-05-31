
<li class="{{ Request::is('admin/people*') ? 'active' : '' }}">
    <a href="{!! route('admin.people.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                data-loop="true"></i>
                Employees Information
    </a>
</li>

{{-- attendace and leave --}}
<li {!! (Request::is('admin/attendances*') || Request::is('admin/leaveTypes*')|| Request::is('admin/leave_applications*')   ? 'class="active"' : '' ) !!}>
    <a href="#">
        <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
        <span class="title">attendace</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu"> 
        <li class="{{ Request::is('admin/attendances*') ? 'active' : '' }}">
            <a href="{{route('admin.admin.attendances.create')}}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       mark attendace
            </a>
        </li>

        <li class="{{ Request::is('admin/attendances*') ? 'active' : '' }}">
            <a href="{{route('admin.admin.attendances.index')}}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       show attendace
            </a>
        </li>
        <li class="{{ Request::is('admin/leave_applications*') ? 'active' : '' }}">
            <a href="{{route('admin.admin.leave_applications.index')}}">
            <i class="livicon" data-c="#6CC66C" data-hc="#6CC66C" data-name="paper-plane" data-size="18"
                       data-loop="true"></i>
                       LeaveApplications
            </a>
        </li>
        
        
        <li class="{{ Request::is('admin/leaveTypes*') ? 'active' : '' }}">
            <a href="{!! route('admin.leaveTypes.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       LeaveTypes
            </a>
        </li>
    </ul>
</li>

{{-- <li class="{{ Request::is('admin/employmentInformations*') ? 'active' : '' }}">
    <a href="{!! route('admin.employmentInformations.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                data-loop="true"></i>
                Employment Info
    </a>
</li>

<li class="{{ Request::is('admin/education*') ? 'active' : '' }}">
    <a href="{!! route('admin.education.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                data-loop="true"></i>
                Education
    </a>
</li> --}}



{{-- job postions fillable --}}
<li {!! (Request::is('admin/officeLevels*') || Request::is('admin/workUnits*') || Request::is('admin/jobClasses*') || Request::is('admin/jobPositions*') ? 'class="active"' : '' ) !!}>
    <a href="#">
        <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
        <span class="title">Job Positions</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="{{ Request::is('admin/officeLevels*') ? 'active' : '' }}">
            <a href="{!! route('admin.officeLevels.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       OfficeLevels
            </a>
        </li>
        <li class="{{ Request::is('admin/workUnits*') ? 'active' : '' }}">
            <a href="{!! route('admin.workUnits.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       WorkUnits
            </a>
        </li>
        
        <li class="{{ Request::is('admin/jobClasses*') ? 'active' : '' }}">
            <a href="{!! route('admin.jobClasses.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       JobClasses
            </a>
        </li>

        <li class="{{ Request::is('admin/jobPositions*') ? 'active' : '' }}">
            <a href="{!! route('admin.jobPositions.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       JobPositions
            </a>
        </li>
    </ul>
</li>

{{-- job address fillable --}}
<li {!! (Request::is('admin/zones*') || Request::is('admin/woredas*') || Request::is('admin/kebeles*') || Request::is('admin/addresses*') ? 'class="active"' : '' ) !!}>
    <a href="#">
        <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
        <span class="title">Address</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="{{ Request::is('admin/zones*') ? 'active' : '' }}">
            <a href="{!! route('admin.zones.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Zones
            </a>
        </li>
        <li class="{{ Request::is('admin/woredas*') ? 'active' : '' }}">
            <a href="{!! route('admin.woredas.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Woredas
            </a>
        </li>
        
        <li class="{{ Request::is('admin/kebeles*') ? 'active' : '' }}">
            <a href="{!! route('admin.kebeles.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Kebeles
            </a>
        </li>

        {{-- <li class="{{ Request::is('admin/addresses*') ? 'active' : '' }}">
            <a href="{!! route('admin.addresses.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Addresses
            </a>
        </li> --}}
    </ul>
</li>

{{--  fillable --}}
<li {!! (Request::is('admin/titles*') || Request::is('admin/genders*') || Request::is('admin/religions*') || Request::is('admin/relationships*') || Request::is('admin/ethnics*') || Request::is('admin/studyFields*') || Request::is('admin/qualifications*') || Request::is('admin/employemetTypes*') || Request::is('admin/maritalStatuses*') || Request::is('admin/reasonForSalaries*') ? 'class="active"' : '' ) !!}>
    <a href="#">
        <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
        <span class="title">Preference</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="{{ Request::is('admin/titles*') ? 'active' : '' }}">
            <a href="{!! route('admin.titles.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Titles
            </a>
        </li>
        <li class="{{ Request::is('admin/genders*') ? 'active' : '' }}">
            <a href="{!! route('admin.genders.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Genders
            </a>
        </li>
        
        <li class="{{ Request::is('admin/religions*') ? 'active' : '' }}">
            <a href="{!! route('admin.religions.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Religions
            </a>
        </li>

        <li class="{{ Request::is('admin/relationships*') ? 'active' : '' }}">
            <a href="{!! route('admin.relationships.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Relationships
            </a>
        </li>

        <li class="{{ Request::is('admin/ethnics*') ? 'active' : '' }}">
            <a href="{!! route('admin.ethnics.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Ethnics
            </a>
        </li>

        <li class="{{ Request::is('admin/studyFields*') ? 'active' : '' }}">
            <a href="{!! route('admin.studyFields.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       StudyFields
            </a>
        </li>

        <li class="{{ Request::is('admin/qualifications*') ? 'active' : '' }}">
            <a href="{!! route('admin.qualifications.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Qualifications
            </a>
        </li>

        <li class="{{ Request::is('admin/employemetTypes*') ? 'active' : '' }}">
            <a href="{!! route('admin.employemetTypes.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       EmployemetTypes
            </a>
        </li>

        <li class="{{ Request::is('admin/maritalStatuses*') ? 'active' : '' }}">
            <a href="{!! route('admin.maritalStatuses.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="servers" data-size="18"
                       data-loop="true"></i>
                       MaritalStatuses
            </a>
        </li>

        <li class="{{ Request::is('admin/reasonForSalaries*') ? 'active' : '' }}">
            <a href="{!! route('admin.reasonForSalaries.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       ReasonForSalaries
            </a>
        </li>
        
    </ul>
</li>

{{-- items --}}
<li {!! (Request::is('admin/itemTypes*') || Request::is('admin/itemStatuses*') || Request::is('admin/items*') || Request::is('admin/allSectionInventeries*') ? 'class="active"' : '' ) !!}>
    <a href="#">
        <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
        <span class="title">Items</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="{{ Request::is('admin/itemTypes*') ? 'active' : '' }}">
            <a href="{!! route('admin.itemTypes.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       ItemTypes
            </a>
        </li>
        
        <li class="{{ Request::is('admin/itemStatuses*') ? 'active' : '' }}">
            <a href="{!! route('admin.itemStatuses.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       ItemStatuses
            </a>
        </li>
        
        <li class="{{ Request::is('admin/items*') ? 'active' : '' }}">
            <a href="{!! route('admin.items.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       Items
            </a>
        </li>
        
        <li class="{{ Request::is('admin/allSectionInventeries*') ? 'active' : '' }}">
            <a href="{!! route('admin.allSectionInventeries.index') !!}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
                       data-loop="true"></i>
                       AllSectionInventeries
            </a>
        </li>
        
    </ul>
</li>




{{-- <li class="{{ Request::is('admin/emergencyContacts*') ? 'active' : '' }}">
    <a href="{!! route('admin.emergencyContacts.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               EmergencyContacts
    </a>
</li> --}}


{{-- <li class="{{ Request::is('admin/guarantees*') ? 'active' : '' }}">
    <a href="{!! route('admin.guarantees.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               Guarantees
    </a>
</li> --}}


{{-- <li class="{{ Request::is('admin/workExperiences*') ? 'active' : '' }}">
    <a href="{!! route('admin.workExperiences.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               WorkExperiences
    </a>
</li> --}}


{{-- <li class="{{ Request::is('admin/employmentInformations*') ? 'active' : '' }}">
    <a href="{!! route('admin.employmentInformations.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               EmploymentInformations
    </a>
</li> --}}

{{-- <li class="{{ Request::is('admin/salaryHistories*') ? 'active' : '' }}">
    <a href="{!! route('admin.salaryHistories.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               SalaryHistories
    </a>
</li> --}}


<li class="{{ Request::is('admin/leaves*') ? 'active' : '' }}">
    <a href="{!! route('admin.leaves.index') !!}">
    <i class="livicon" data-c="#6CC66C" data-hc="#6CC66C" data-name="paper-plane" data-size="18"
               data-loop="true"></i>
               Leaves
    </a>
</li>


<li class="{{ Request::is('admin/leaveTypes*') ? 'active' : '' }}">
    <a href="{!! route('admin.leaveTypes.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               LeaveTypes
    </a>
</li>

{{-- <li class="{{ Request::is('admin/maritalStatus/maritalStatuses*') ? 'active' : '' }}">
    <a href="{!! route('admin.maritalStatus.maritalStatuses.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="servers" data-size="18"
               data-loop="true"></i>
               Marital_statuses
    </a>
</li> --}} 




