@extends('layouts.backend.app')
@section('title')
    Landlord - See Maintenance Requests
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('partial.successMessage')

                <div class="card my-5 mx-4">
                    <div class="card-header">
                        <h3 class="card-title float-left"><strong>Maintenanse Response ({{ $requests->count() }})</strong>
                        </h3>

                    </div>
                    <!-- /.card-header -->
                    @if ($requests->count() > 0)
                        <div class="">
                            <div class="table-responsive">
                                <table id="dataTableId" class="table table-bordered table-striped table-background">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            {{-- <th>Type</th> --}}
                                            <th>landlord_ID</th>
                                            {{-- <th>Renter_ID</th> --}}
                                            <th>landlord_Contact</th>
                                            <th>Mentain_type</th>
                                            <th>Message(Response)</th>
                                            <th>status</th>
                                            <th>Response_Date</th>
                                            {{-- <th>Action</th> --}}

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($requests as $req)
                                            <tr>
                                                <td>{{ $req->id }}</td>
                                                {{-- <td>{{ $req->type }}</td> --}}
                                                <td>{{ $req->landlord_id }}</td>
                                                {{-- <td>{{ $req->renter_id }}</td> --}}
                                                <td>{{ $req->landlord_contact }}</td>
                                                <td>{{ $req->mentenance_type }}</td>
                                                <td>{{ $req->message }}</td>
                                                <td>{{ $req->status }}</td>
                                                <td>{{ $req->created_at }}</td>
                                                {{-- <td>
                                                    <a href="{{ url('send_response', $req->id) }}"
                                                        class="btn btn-info btn-sm">Response</a>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>ssss

                        </div> <!-- /.card-body -->
                    @else
                        <h2 class="text-center text-info font-weight-bold m-3">No Responce History Found</h2>
                    @endif

                    <div class="pagination">

                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
@endsection

@section('scripts')
@endsection
