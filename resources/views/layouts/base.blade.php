<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" ></script>
    <script defer src="http://127.0.0.1:8000/js/ajaxAndCopy.js" ></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/png" href="favicon.png"/>
    <link rel="icon" type="image/png" href="favicon.png"/>
</head>
<body>

@include('inc.header')

<div class="main">@yield('content')</div>
@include('inc.footer')

</body>
</html>
