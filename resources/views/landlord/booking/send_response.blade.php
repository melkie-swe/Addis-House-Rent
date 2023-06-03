@extends('layouts.backend.app')
@section('title')
    LandLord - Sene Responce page
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center wow fadeInUp">Send Responce to Renter </h3>
        <hr style="background-color:green;border-width:4px;">
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    X
                </button>
                {{ session()->get('message') }}
            </div>
        @endif
        <form class="main-form form-group" method="POST" action="{{ url('post_response') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-2">
                <div class="col-12 col-sm-2 py-2 wow fadeInLeft">
                    <label for="">Renter Id</label>
                    <input type="text" class="form-control" name="renter_id" value="{{ $data->renter_id }}" readonly>
                </div>
                <div class="col-12 col-sm-3 py-2 wow fadeInRight">
                    <label for="">Renter Name</label>
                    <input type="text" class="form-control" name="renter_name" value="{{ $data->renter_name }}" readonly>
                </div>
                <div class="col-12 col-sm-4 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="">landlord Email</label>
                    <input type="email" name="email" class="form-control" placeholder=" ኢማል አስገባ ?"
                        value="{{ $data->landlord_email }}" readonly>
                </div>
                <div class="col-12 col-sm-3 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="">Menntenance Type</label>
                    <input type="email" name="mentenance_type" class="form-control" value="{{ $data->mentenance_type }}"
                        readonly>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea class="form-control" name="message" rows="4" required>አጠቃላይ ያለዎትን መልኢክት ያስቀምጡ ?
                    </textarea>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col sm-6">
                </div>
                <div class="col sm-6">
                    <button class="btn btn-info">Submit Request</button>
                </div>
            </div>

    </div>
    </form>


    {{-- <hr style="background-color:rgb(11, 231, 110);border-width:2px;"> --}}
    </div>
@endsection
