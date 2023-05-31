@extends('layouts.frontend.app')

@section('title','Home')

@section('content')

<div class="container">
    <div>
    
        <img src="{{ asset('images/'.json_decode($house->images)[0]) }}" class="img-fluid m-2"
            style="height: 350px;width: 100%; ">
                          
        <div class="row gallery">
                        @foreach (json_decode($house->images) as $picture)
                        <div class="col-md-4">
                            <a href="{{ asset('images/'.$picture) }}">
                                <img src="{{ asset('images/'.$picture) }}" class="img-fluid m-2"
                                    style="height: 150px;width: 100%; ">
                            </a>
                        </div>
                        @endforeach
                    </div>
    </div>
    
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card my-5" >
                        <div style="margin:15px;">
                            <h5>Overview</h5>
                            <hr>
                            <div class="row">
                            <div class="col">
                            <h6>Property Type</h6>
                            <h6>{{ $property_type->name }}</h6>
                            </div>

                            <div class="col">
                            <h6>Bedrooms</h6>
                            <span><i class="fa fa-bed"></i>&emsp;{{$house->number_of_room}}</span>
                            </div>

                            <div class="col">
                            <h6>Bathrooms</h6>
                            <span><i class="fa fa-shower"></i>&emsp;{{$house->number_of_toilet}}</span>
                            </div>

                            <div class="col">
                            <h6>Parking</h6>
                            <span><i class="fa-solid fa-car"></i>&emsp;{{$house->number_of_parking}}</span>
                            </div>

                            <div class="col">
                            <h6>Size</h6>
                            <span><i class="fa-solid fa-ruler-combined"></i>&emsp;{{$house->size}}</span>
                            </div>

                    </div>
                </div>
            </div>
        </div>
<div class="col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card my-5">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3><strong>House Details</strong></h3>

                        </div>
                        <div>
                                    
                            <a class="btn btn-danger" href="{{ route('welcome') }}"> Back</a>
                            @if ($house->status == 1)
                                    <span class="btn btn-success">Available</span>
                                    @else
                                    <span class="btn btn-danger">Not Available</span>
                                    @endif

                            @guest
                            <a href="" onclick="guestBooking()" class="btn btn-info">Apply for booking</a>
                            @else

                            @if (Auth::user()->role_id == 3)
                            <button class="btn btn-info" type="button" onclick="renterBooking({{ $house->id }})">
                                Apply for booking
                            </button>

                            <form id="booking-form-{{ $house->id }}" action="{{ route('booking', $house->id) }}"
                                method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endif
                            @endguest
                        </div>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            
                            <tr>
                                @include('partial.successMessage')
                            </tr>

                            <tbody id="section1">
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $house->address }}</td>
                                    <th>Area</th>
                                    <td>{{ $house->area->name }}</td>
                                    
                                </tr>
                            </tbody>
                            <tbody id="section2">
                                <tr>
                                    <th>Owner Name</th>
                                    <td>{{ $house->user->name }}</td>
                                    <th>Owners Contact</th>
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
                            </tbody>
                            
             
                        </table>
                    </div>

                    


                </div>



                <!-- /.card-body -->
            </div>
            <!-- /.card -->





        </div>
    </div>

</div>
</div>
    @if ($house->reviews->count() > 0)
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card my-5">
                <div class="card-header bg-dark text-white">
                    <strong>Renter Reviews of this house ({{ $house->reviews->count() }})</strong>
                </div>

                <div class="card-body">
                    @foreach ($house->reviews as $review)
                    <div class="card mb-3">
                        <div class="card-header">
                            <img class="mr-3"
                                src="{{ $review->user->image!=null ? asset('storage/profile_photo/'. $review->user->image) : asset('storage/profile_photo/default.png') }}"
                                width="35" height="35"
                                style="border-radius: 50%"><strong>{{ $review->user->name }}</strong>
                        </div>
                        <div class="card-body">
                            <p class="text-justify">
                                {{ $review->opinion }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif



</div><!-- /.container -->

@endsection




@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    window.addEventListener('load', function() {
        baguetteBox.run('.gallery', {
            animation: 'fadeIn',
            noScrollbars: true
        });
   });

   function guestBooking(){
                Swal.fire(
                    'If you want to booking this house',
                    'Then you must have to login first as a renter',
                )
                event.preventDefault();     
    }

    function renterBooking(id){
           const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            
            swalWithBootstrapButtons.fire({
                title: 'Are you sure to booking this house?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        document.getElementById('booking-form-'+id).submit();
                
                    } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                    ) {
                    swalWithBootstrapButtons.fire(
                        'Not Now!',
                        
                    )
                }
            })
       }

</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5fb96836345445"></script>
@endsection



@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
@endsection