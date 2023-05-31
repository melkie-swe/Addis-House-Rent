{{-- page level styles --}}
@section('header_styles')
    {{-- for amharic datepicker --}}
    <link rel="stylesheet" href="{{ asset('css/redmond.calendars.picker.css')}}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
@stop



    
    <section class="content pr-3 pl-3">

        <div class="row">
            <div class="col-sm-6 col-xs-12 hris-sections">
                <div class="form-group col-sm-12">
                    {!! Form::label('item_type_id', 'Item Type Id:') !!}
                    {!! Form::select('item_type_id',$itemtype, null, ['class' => 'form-control']) !!}
                    
                </div>
            
            </div>
            {{-- <div class="col-sm-6 col-xs-12 hris-sections">
                <div class="form-group col-sm-12">
                    {!! Form::label('code', 'Code:') !!}
                    {!! Form::text('code', null, ['class' => 'form-control']) !!}
                </div>
            
            </div> --}}
            <div class="col-sm-6 col-xs-12 hris-sections">
                <div class="form-group col-sm-12">
                    {!! Form::label('item_status_id', 'Item Status Id:') !!}
                    {!! Form::select('item_status_id',$itemstatus, null, ['class' => 'form-control']) !!}
                    
                </div>
            
            </div>
            <div class="col-sm-6 col-xs-12 hris-sections">
                <div class="form-group col-sm-12">
                    {!! Form::label('product_description', 'Product Description:') !!}
                    {!! Form::text('product_description', null, ['class' => 'form-control']) !!}
                </div>
            
            </div>
            <div class="col-sm-6 col-xs-12 hris-sections">
                <div class="form-group col-sm-12">
                    {!! Form::label('date', 'Date:') !!}
                    {!! Form::text('date', null, ['class' => 'form-control']) !!}
                </div>
            
            </div>
        </div>
        
        <!-- Submit Field -->
        <div class="form-group col-sm-12 text-center">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('admin.items.index') !!}" class="btn btn-secondary">Cancel</a>
        </div>
    </section>



{{-- page level scripts --}}
@section('footer_scripts')
{{-- for amharic datepicker --}}
<script src="{{ asset('js/jquery.plugin.js')}}"></script>

<script src="{{ asset('js/jquery.calendars.js')}}"></script>
<script src="{{ asset('js/jquery.calendars.plus.js')}}"></script>
<script src="{{ asset('js/jquery.calendars.picker.js')}}"></script>

<script src="{{ asset('js/jquery.calendars.ethiopian.js')}}"></script>
<script src="{{ asset('js/jquery.calendars.ethiopian-am.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.calendars.picker-am.js')}}"></script>

<script>
$(function() {
	 var calendar = $.calendars.instance('ethiopian','am');
    $('#date').calendarsPicker({calendar: calendar});
    
});

</script>  
    
@stop























