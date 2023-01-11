<meta charset="utf-8"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<link rel="canonical" href="{{config('app.url')}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="shortcut icon" href="https://ppb.ps/assets/site/images/logo.png">
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">


<!--end::Fonts-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
<!--end::Global Stylesheets Bundle-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
@font-face {
    font-family: 'Cairo-Regular';
    font-style: normal;
    src: url('assets/font/Cairo-Regular.ttf');

}

html, body{

    font-family: Cairo-Regular,"sans-serif" !important;

}</style>
@stack('css')
