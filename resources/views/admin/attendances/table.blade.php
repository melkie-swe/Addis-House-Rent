<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="attendances-table" width="100%">
    <thead>
     <tr>
        <th>Person Id</th>
        <th>Date</th>
        <th>Status</th>
        <th>Leave Type</th>
        <th>Half Day Type</th>
        <th>Last Updated By</th>
        <th>Reason</th>
        <th>Application Status</th>
        <th>Applied On</th>
        <th>Clock In</th>
        <th>Clock Out</th>
        <th>Clock In Ip Address</th>
        <th>Clock Out Ip Address</th>
        <th>Working From</th>
        <th>Notes</th>
        <th>Is Late</th>
        <th>Office Start Time</th>
        <th>Office End Time</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($attendances as $attendance)
        <tr>
            <td>{!! $attendance->person_id !!}</td>
            <td>{!! $attendance->date !!}</td>
            <td>{!! $attendance->status !!}</td>
            <td>{!! $attendance->leave_type !!}</td>
            <td>{!! $attendance->half_day_type !!}</td>
            <td>{!! $attendance->last_updated_by !!}</td>
            <td>{!! $attendance->reason !!}</td>
            <td>{!! $attendance->application_status !!}</td>
            <td>{!! $attendance->applied_on !!}</td>
            <td>{!! $attendance->clock_in !!}</td>
            <td>{!! $attendance->clock_out !!}</td>
            <td>{!! $attendance->clock_in_ip_address !!}</td>
            <td>{!! $attendance->clock_out_ip_address !!}</td>
            <td>{!! $attendance->working_from !!}</td>
            <td>{!! $attendance->notes !!}</td>
            <td>{!! $attendance->is_late !!}</td>
            <td>{!! $attendance->office_start_time !!}</td>
            <td>{!! $attendance->office_end_time !!}</td>
            <td>
                 <a href="{{ route('admin.attendances.show', collect($attendance)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view attendance"></i>
                 </a>
                 <a href="{{ route('admin.attendances.edit', collect($attendance)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit attendance"></i>
                 </a>
                 <a href="{{ route('admin.attendances.confirm-delete', collect($attendance)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.attendances.delete', collect($attendance)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete attendance"></i>

                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Item? This operation is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        $('#attendances-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#attendances-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#attendances-table').on( 'length.dt', function ( e, settings, len ) {
                     setTimeout(function(){
                            $('.livicon').updateLivicon();
                     },500);
                  } );

                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

@stop
