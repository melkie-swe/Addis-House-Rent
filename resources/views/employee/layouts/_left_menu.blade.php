<ul id="menu" class="page-sidebar-menu">
    <li {!! (Request::is('employee') ? 'class="active"' : '' ) !!}>
        <a href="{{ route('employee.dashboard') }}">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>

    <li {!! ((Request::is('employee/users/*')) ? 'class="active" id="active"' : '' ) !!}>
        <a href="{{ URL::route('employee.my_account') }}">
            <i class="livicon" data-name="user" data-size="18" data-c="#2E2EC4" data-hc="#2E2EC4" data-loop="true"></i>
            View Profile
        </a>
    </li>

    <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '' ) !!}>
        <a href="{{ URL::route('employee.leaves.index') }}">
            <i class="livicon" data-c="#6CC66C" data-hc="#6CC66C" data-name="paper-plane" data-size="18"></i>
            My Leave
        </a>
    </li>

    <li {!! ((Request::is('admin/users/*')) ? 'class="active" id="active"' : '' ) !!}>
        <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
            <i class="livicon" data-name="user" data-size="18" data-c="#2E2EC4" data-hc="#2E2EC4" data-loop="true"></i>
            Job Vacancies
        </a>
    </li>

</ul>