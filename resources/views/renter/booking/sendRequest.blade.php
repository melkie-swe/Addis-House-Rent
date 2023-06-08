@extends('layouts.backend.app')
@section('title')
    Renter - Send Request
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center wow fadeInUp">send Request to Landlord </h3>
        <hr style="background-color:green;border-width:4px;">
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    X
                </button>
                {{ session()->get('message') }}
            </div>
        @endif
        <form class="main-form form-group" method="post" action="{{ url('send_request') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-2">
                <div class="col-12 col-sm-4 py-2 wow fadeInLeft">
                    <label for="">LandLord id</label>
                    <input type="text" class="form-control" name="id" value="{{ $data->id }}" readonly>
                </div>
                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                    <label for="">landlord contact</label>
                    <input type="number" class="form-control" name="contact" value="{{ $data->contact }}" readonly>
                </div>
                <div class="col-12 col-sm-4 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="">landlord email</label>
                    <input type="email" name="email" class="form-control" placeholder=" ኢማል አስገባ ?"
                        value="{{ $data->email }}" readonly>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-9 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea class="form-control" name="message" rows="4" required>write your request ?
                    </textarea>
                </div>

                <div class="col-12 col-sm-3 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="mentenance_type" class="custom-select form-control">
                        <option value="">select maitenanse type ?"</option>
                        <option value="toilet">toilet </option>
                        <option value="bathroom">bathroom </option>
                        <option value="electric">electric</option>
                        <option value="door">door</option>
                        <option value="window">window</option>
                        <option value="paint">paint</option>
                    </select>
                </div>
            </div>

            <div class="row mt-2">
                <td class="col sm-1">
                </td>
                <div class="col sm-5">
                    <a href="{{ url('back_renter') }}" class="btn btn-danger btn-sm">Back</a>

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
