<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
    <table class="table table-striped table-bordered" id="zones-table" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Name Am</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zones as $zone)
            <tr>
                <td>{!! $zone->name !!}</td>
                <td>{!! $zone->validationstandard($zone->id,$zone->id) !!}</td>
                <td>
                    <a href="{{ route('admin.zones.show', collect($zone)->first() ) }}">
                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view zone"></i>
                    </a>
                    <a href="{{ route('admin.zones.edit', collect($zone)->first() ) }}">
                        <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit zone"></i>
                    </a>
                    <a href="{{ route('admin.zones.confirm-delete', collect($zone)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.zones.delete', collect($zone)->first() ) }}">
                        <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete zone"></i>

                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@section('footer_scripts')

{{-- for delete --}}
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
                <a type="button" class="btn btn-danger Remove_square">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('body').on('hidden.bs.modal', '.modal', function() {
            $(this).removeData('bs.modal');
        });
    });

</script>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}"></script>

<script>
    $('#zones-table').dxDataGrid({
        dataSource: employees
        , keyExpr: 'ID'
        , showBorders: true

        , masterDetail: {
            enabled: true
            , template(container, options) {
                const currentEmployeeData = options.data;

                $('<div>')
                    .addClass('master-detail-caption')
                    .text(`${currentEmployeeData.FirstName} ${currentEmployeeData.LastName}'s Tasks:`)
                    .appendTo(container);

                $('<div>')
                    .dxDataGrid({
                        columnAutoWidth: true
                        , showBorders: true
                        , columns: ['Subject', {
                            dataField: 'StartDate'
                            , dataType: 'date'
                        , }, {
                            dataField: 'DueDate'
                            , dataType: 'date'
                        , }, 'Priority', {
                            caption: 'Completed'
                            , dataType: 'boolean'
                            , calculateCellValue(rowData) {
                                return rowData.Status === 'Completed';
                            }
                        , }]
                        , dataSource: new DevExpress.data.DataSource({
                            store: new DevExpress.data.ArrayStore({
                                key: 'ID'
                                , data: tasks
                            , })
                            , filter: ['EmployeeID', '=', options.key]
                        , })
                    , }).appendTo(container);
            }
        , }
    , });
    $('#zones-table').DataTable({
        responsive: true
        , pageLength: 10
    });
    $('#zones-table').on('page.dt', function() {
        setTimeout(function() {
            $('.livicon').updateLivicon();
        }, 500);
    });
    $('#zones-table').on('length.dt', function(e, settings, len) {
        setTimeout(function() {
            $('.livicon').updateLivicon();
        }, 500);
    });

    $('#delete_confirm').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var $recipient = button.data('id');
        var modal = $(this);
        modal.find('.modal-footer a').prop("href", $recipient);
    })

</script>

@stop
