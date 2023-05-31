<div id="updateCell{{ $row->employeeID }}">
@if($row->date == null)
    <span class="label label-danger">Not Marked</span>
@else
    @if($row->application_status == "approved")
        <span class="label label-warning">On Leave</span>
    @else
        <span class="label label-success">Marked</span>
    @endif

    @if ($row->is_late == 1)
        &nbsp;<span class="label label-danger">Late</span>
    @endif

<div class="margin-top-10">
    
    
</div>

@endif
</div>
