<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" ></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/ajaxAndCopy.js') }}" defer></script>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}"/>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">

        @include('inc.header')

            <div class="main">@yield('content')</div>

        @include('inc.footer')

    </div>

</body>
</html>
