@extends('layouts.backend.app')
@section('title')
    Details - {{ $house->address }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3><strong>House Details</strong></h3>
                            </div>
                            <div>
                                <a class="btn btn-danger" href="{{ route('admin.house.index') }}"> Back</a>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $house->address }}</td>
                                    <th>Area</th>
                                    <td>{{ $house->area->name }}</td>
                                </tr>

                                <tr>
                                    <th>Owner</th>
                                    <td>{{ $house->user->name }}</td>
                                    <th>Contact</th>
                                    <td>{{ $house->contact }}</td>
                                </tr>

                                <tr>
                                    <th>Number of rooms</th>
                                    <td>{{ $house->number_of_room }}</td>
                                    <th>Number of toilet</th>
                                    <td>{{ $house->number_of_toilet }}</td>
                                </tr>


                                <tr>
                                    <th>Number of belcony</th>
                                    <td>{{ $house->number_of_belcony }}</td>
                                    <th>Rent</th>
                                    <td>{{ $house->rent }}</td>
                                </tr>

                                <tr>
                                  <th>National ID</th>
                                    <td>{{ $house->user->nid }}</td>
                                    <th>Status</th>
                                    <td>
                                        @if ($house->status == 1)
                                            <span class="btn btn-success">Available</span>
                                        @else
                                            <span class="btn btn-danger">Not Available</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="row gallery">
                            @foreach (json_decode($house->images) as $picture)
                                <div class="col-md-3">
                                    <a href="{{ asset('images/' . $picture) }}">
                                        <img src="{{ asset('images/' . $picture) }}" class="img-fluid m-2"
                                            style="height: 150px;width: 100%; ">Images of House
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="row gallery">
                            @foreach (json_decode($house->Certificate_of_possession) as $pic)
                                <div class="col-md-3">
                                    <a href="{{ asset('Certificate_of_possession/' . $pic) }}">
                                        <img src="{{ asset('Certificate_of_possession/' . $pic) }}" class="img-fluid m-2"
                                            style="height: 150px;width: 100%; ">Certificate of possession
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="col-md-3">
                            <a href="{{ asset('Certificate_of_possession/' . $house->Certificate_of_possession) }}">
                                <img src="{{ asset('Certificate_of_possession/' . $house->Certificate_of_possession) }}"
                                    class="img-fluid m-2" style="height: 150px;width: 100%; ">Certificate of possession
                            </a>
                        </div> --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            baguetteBox.run('.gallery', {
                animation: 'fadeIn',
                noScrollbars: true
            });
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
@endsection
