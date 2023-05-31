@extends('admin/layouts/default')

@section('title')
Guarantees
@parent
@stop
@section('content')
  @include('common.errors')
    <section class="content-header">
     <h1>Guarantees Edit</h1>
     <ol class="breadcrumb">
         <li>
             <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                 Dashboard
             </a>
         </li>
         <li>Guarantees</li>
         <li class="active">Edit Guarantee </li>
     </ol>
    </section>
    <section class="content">
    <div class="container">
      <div class="row">
             <div class="col-12">
              <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Edit  Guarantee
                        </h4></div>
                    <br />
                <div class="card-body">
                {!! Form::model($guarantee, ['route' => ['admin.guarantees.update', collect($guarantee)->first() ], 'method' => 'patch']) !!}

                @include('admin.guarantees.fields')

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
