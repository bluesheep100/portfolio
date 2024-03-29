<!doctype html>
<html lang="en" class="mh-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway"/>

    @vite(['resources/js/app.js'])

    <title>Anders' portfolio</title>
</head>
<body class="d-flex flex-column mh-100">
    @include('navbar')

    <main class="mb-3">
        @yield('content')
    </main>

    @include('footer')
</body>
</html>
