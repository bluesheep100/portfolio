<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    @yield('stylesheets')
</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-theme-onload="true">

<div class="page-wrapper with-sidebar" data-sidebar-type="full-height">
    <x-sidebar></x-sidebar>

    <div class="content-wrapper">
        @yield('content')
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/gh/halfmoonui/halfmoon@1.0.4/js/halfmoon.min.js"></script>
</body>
</html>
