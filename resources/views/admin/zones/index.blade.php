@extends('admin/layouts/default')

@section('title')
Zones
@parent
@stop

@section('header_styles')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))

</script>
<link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/22.2.6/css/dx.light.css" />
<script src="https://cdn3.devexpress.com/jslib/22.2.6/js/dx.all.js"></script>
<script src="data.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script src="index.js"></script>
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Zones</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Zones</li>
        <li class="active">Zones List</li>
    </ol>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
                <div class="card border-primary ">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title float-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Zones List
                        </h4>
                        <div class="float-right">
                            <a href="{{ route('admin.zones.create') }}" class="btn btn-sm btn-secondary"><span class="fa fa-plus"></span> @lang('button.create')</a>
                        </div>
                    </div>
                    <br />
                    <div class="card-body table-responsive">
                        @include('admin.zones.table')

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
