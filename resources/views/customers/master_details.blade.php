@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="panel-heading">Master details</div>
    <div class="panel-body">
        <table class="table table-bordered" id="customers-table">
            <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection

@section('javascript')

<script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>

    <script id="details-template" type="text/x-handlebars-template">
        @verbatim
        <div class="label label-info">Customer {{ first_name }}'s Purchases</div>
        <table class="table details-table" id="purchases-{{id}}">
            <thead>
            <tr>
                <th>Id</th>
                <th>Bank account number</th>
                <th>Company</th>
            </tr>
            </thead>
        </table>
        @endverbatim
    </script>
    <script>
      console.log("teka");
      var template = Handlebars.compile($("#details-template").html());
      console.log(template);
      var table = $('#customers-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('api.master_details') }}',
        columns: [
          {
            "className":      'details-control',
            "orderable":      false,
            "searchable":     false,
            "data":           null,
            "defaultContent": ''
          },
          { data: 'id', name: 'id' },
          { data: 'first_name', name: 'first_name' },
          { data: 'last_name', name: 'last_name' },
          { data: 'email', name: 'email' },
          { data: 'created_at', name: 'created_at' },
          { data: 'updated_at', name: 'updated_at' },
        ],
        order: [[1, 'asc']]
      });

      // Add event listener for opening and closing details
      $('#customers-table tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var tableId = 'purchases-' + row.data().id;

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(template(row.data())).show();
          initTable(tableId, row.data());
          console.log(row.data());
          tr.addClass('shown');
          tr.next().find('td').addClass('no-padding bg-gray');
        }
      });

      function initTable(tableId, data) {
        $('#' + tableId).DataTable({
          processing: true,
          serverSide: true,
          ajax: data.details_url,
          columns: [
            { data: 'id', name: 'id' },
            { data: 'bank_acc_number', name: 'bank_acc_number' },
            { data: 'company', name: 'company'}
          ]
        })
      }
    </script>
@endsection
