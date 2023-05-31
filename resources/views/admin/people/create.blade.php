@extends('admin/layouts/default')

@section('title')
Person
@parent
@stop

@section('content')
@include('common.errors')
<section class="content-header">
    <h1>Person</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>People</li>
        <li class="active">Create Person </li>
    </ol>
</section>
<section class="content">
    <form id="commentForm" action="{{ route('admin.people.store') }}"
                    method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @include('admin.people.fields')

    </form>
    {{-- {!! Form::open(['route' => 'admin.people.store']) !!}

        @include('admin.people.fields')

    {!! Form::close() !!} --}}
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
