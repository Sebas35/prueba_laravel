<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Pricing | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ url('css/app.css') }}" id="app-style"/>
</head>
<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
<div class="wrapper">
    <x-leftsidebar/>
    <div class="content-page">
        <div class="content">
            <x-topbar/>
            @yield('content')
        </div>
        <x-footer/>
    </div>
</div>
<x-endbar/>
<div class="rightbar-overlay"></div>
<script src="{{ url('js/app.js') }}"></script>
</body>
</html>
