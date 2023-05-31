<meta charset="utf-8"/>
<title>{!! $pageTitle !!} - {{ $loggedAdmin->company->company_name ?? $setting->main_name}} </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="{{ asset('assets/global/plugins/pace/pace.min.js') }}"></script>
<link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/pace/themes/pace-theme-flash.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/select2/css/select2.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" >

@yield('head')
<link href="{{ asset('assets/global/css/components.css?v=1') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/css/plugins.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/admin/layout/css/layout.css?v=2') }}" rel="stylesheet" >
<link href="{{ asset('assets/admin/layout/css/themes/light.min.css?v=2') }}" rel="stylesheet" >
<link href="{{ asset('assets/admin/layout/css/custom.css?v=2') }}" rel="stylesheet" >
<link href="{{ asset('assets/global/plugins/froiden-helper/helper.css?v=2') }}" rel="stylesheet" >

