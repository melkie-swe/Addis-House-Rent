<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
{{--Approve--}}
{{--Approve--}}
{!! Form::open(['url'=>'','id'=>'show_approve','method'=>'PATCH']) !!}
<div id="static_approve" class="modal fade" tabindex="-1" data-backdrop="static_approve" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">@lang('core.confirmation')</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="application_status" value="@lang('core.btnApprove')">
                <p>
                    @lang('messages.approveLeave')
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal"
                        class="btn dark btn-outline">@lang('core.btnCancel')</button>
                <button type="submit" data-loading-text="@lang("core.updating")..."
                        class="btn green">@lang('core.btnApprove')</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
{{--APPROVE--}}

{{--Reject--}}
{!! Form::open(['url'=>'','id'=>'show_reject','method'=>'PATCH']) !!}
<div id="static_reject" class="modal fade" tabindex="-1" data-backdrop="static_reject" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">@lang('core.rejection')</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="application_status" value="@lang('core.btnReject')">
                <p>
                    @lang('messages.rejectLeave')
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal"
                        class="btn dark btn-outline">@lang('core.btnCancel')</button>
                <button type="submit" data-loading-text="@lang("core.updating")..."
                        class="btn red">@lang('core.btnReject')</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}



{{-- <script src="{{ asset('assets/global/plugins/jquery.min.js') }}"></script> --}}
<script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.0/js.cookie.min.js"></script>

<script src="{{ asset('assets/global/plugins/bootstrap-sessiontimeout/bootstrap-session-timeout.js') }}"></script>
<script src="{{ asset('assets/global/plugins/select2/js/select2.js') }}"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/froiden-helper/helper.js?v=1') }}"></script>
<script src="{{ asset('assets/admin/layout/scripts/app.js') }}"></script>
<script src="{{ asset('assets/admin/layout/scripts/layout.js?v=1') }}"></script>
<script src="{{ asset('assets/js/commonjs.js?v=3') }}"></script>
<script src="{{ asset('assets/global/plugins/lodash.core.min.js') }}"></script>



<script rel="core" type="text/javascript">
    
    function show_approve(id) {
        $('#showModal').modal('hide');
        $('#show_approve').attr('action', "{{ URL::to('admin/leave_applications/') }}/" + id);
    }

    function show_reject(id) {
        $('#showModal').modal('hide');
        $('#show_reject').attr('action', "{{ URL::to('admin/leave_applications/') }}/" + id);
    }

</script>


@yield('footerjs')
