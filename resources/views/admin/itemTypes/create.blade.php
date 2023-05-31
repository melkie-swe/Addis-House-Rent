@extends('admin/layouts/default')

@section('title')
ItemType
@parent
@stop

@section('content')
@include('common.errors')
<section class="content-header">
    <h1>ItemType</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>ItemTypes</li>
        <li class="active">Create ItemType </li>
    </ol>
</section>
<section class="content">
<div class="container">
<div class="row">
    <div class="col-12">
     <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <span class="float-left my-2">
                <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Create New  ItemType
                </h4>
                </span>
                <a href="{{ URL('admin/bulk_import_itemtype') }}" class="float-right btn btn-success">
                    <i class="fa fa-plus fa-fw"></i>Bulk Import</a>
            </div>
            <br />
            <div class="card-body">
            {!! Form::open(['route' => 'admin.itemTypes.store']) !!}

                @include('admin.itemTypes.fields')

            {!! Form::close() !!}
        </div>
      </div>
      </div>
 </div>

</div>
</section>
 @stop
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
@stop
