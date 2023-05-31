@section('header_styles')
<link href="{{ asset('css/pages/dropdownft.css') }}" rel="stylesheet"/>
@stop

<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md" >
    <div class="dropdown"> 
        <span class="dd-button">Show/Hide Columns</span>
        <div class="dropdown-content" >
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="0" style="width: 100%">Full Name</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="1" style="width: 100%">Id Number</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="2" style="width: 100%">Gender</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="3" style="width: 100%">Date_of_Birth</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="4" style="width: 100%">Email</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="5" style="width: 100%">Year of Employment</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="6" style="width: 100%">Work Unit</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="7" style="width: 100%">Job class</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="8" style="width: 100%">Job Position</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="9" style="width: 100%">Type of employement</button>
            {{-- <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="10" style="width: 100%">Beginning Salary</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="11" style="width: 100%">increment date</button> --}}
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="10" style="width: 100%">Current Salary</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="11" style="width: 100%">Pension No</button>
            <button type="button" class="toggle-vis btn btn-xs btn-outline-primary mr-2" data-column="12" style="width: 100%">Mobile  No</button>
        </div>
    </div>
    

<table class="table table-striped table-bordered" id="people-table" width="100%">
    <thead>
     <tr>
        <th>Full Name</th>
        <th>Id Number</th>
        <th>Gender</th>
        <th>Date_of_Birth</th>
        <th>Email</th>
        <th>Year of Employment</th>
        <th>Work Unit</th>
        <th>Job class</th>

        <th>Job Position Id</th>
        <th>Type of employement</th>
        {{-- <th>Beginning Salary</th> --}}
        {{-- <th>Date of nearest salary increment</th> --}}
        <th>Current Salary</th>
        <th>Pension No</th>
        <th>Mobile  No</th>
        
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($people as $person)
        <tr data-href="{{URL::to('admin/people',collect($person)->first())}}">
            <td>{!! $person->titlesname ?? null !!}{!! $person->full_name ?? null !!}</td>
            <td>{!! $person->id_number ?? null !!}</td>
            <td>{!! $person->gendersname ?? null !!}</td>
            
            <td>{!! empty($person->dob) ? null : Carbon\Carbon::parse($person->dob)->format('d/m/Y') ?? null!!}</td>
            <td>{!! $person->email ?? null !!}</td> 
            
            <td>{!! empty($person->jstart_date) ? null : Carbon\Carbon::parse($person->jstart_date)->format('d/m/Y')  ?? null !!}</td>
            <td>{!! $person->workunitsname ?? null !!}</td>
            <td>{!! $person->jobclasssname ?? null !!}</td>
            <td>{!! $person->position_id ?? null !!}</td>
            <td>{!! $person->employemettypesname ?? null !!}</td>
            {{-- <td>{!! $person->firstsalaryHistory->basic_salary + $person->firstsalaryHistory->allowance ?? null !!}</td>
             --}}
            {{-- <td>{!! empty($person->currentsalaryHistory->date) ? null : $person->currentsalaryHistory->date->format('d/m/Y') ?? null !!}</td> --}}
            <td>{!! $person->basic_salary + $person->allowance ?? null !!}</td>
            
            <td>{!! $person->pension_no ?? null !!}</td>
            <td>{!! $person->mobile ?? null !!}</td>
            
            <td>
                 <a href="{{ route('admin.people.show', collect($person)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view person"></i>
                 </a>
                 {{-- <a href="{{ route('admin.people.edit', collect($person)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit person"></i>
                 </a>
                 <a href="{{ route('admin.people.confirm-delete', collect($person)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.people.delete', collect($person)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete person"></i>

                 </a> --}}
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


{{-- for tools --}}
<script type="text/javascript" src="{{ asset('vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.scroller.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}" ></script>


    <script>
        var table1 = $('#people-table').DataTable({
                    dom:
                    '<"m-t-10"B><"m-t-10 pull-left"f><"m-t-10 pull-right"l>rt<"pull-left m-t-10"i><"m-t-10 pull-right"p>',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                    
                      
                      pageLength: 10
                  });
                  $('#people-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#people-table').on( 'length.dt', function ( e, settings, len ) {
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

                  $('button.toggle-vis').on('click', function(e) {
                        e.preventDefault();

                        // Get the column API object
                        var column = table1.column($(this).attr('data-column'));

                        // Toggle the visibility
                        column.visible(!column.visible());
                    });

       </script>
       <script>
           $('#people-table tbody').on('click', 'tr', function() {
                
                window.location.href = $(this).data('href');

                
        
    });
       </script>

@stop
