<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Statistic</title>

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/ajaxAndCopy.js') }}" defer></script>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    @include('inc.header')


    <div class="container  statCont">
        <h1>Statistic</h1>
        <div class="row mb-3">
            <div class="col-1 themed-grid-col stat">Pos.</div>
            <div class="col-6 themed-grid-col stat">Users original links</div>
            <div class="col-3 themed-grid-col stat">Users short links</div>
            <div class="col-1 themed-grid-col stat">Created at</div>
            <div class="col-1 themed-grid-col stat">Redir.</div>

        </div>

        @foreach($data as $elem)
            <div class="row mb-3 pb-3">
                <div class="col-1 themed-grid-col stat">{{ $i++ }}</div>
                <div class="col-6 themed-grid-col stat"><a href="{{ $elem->origUrl }}">{{ $elem->origUrl }}</a></div>
                <div class="col-3 themed-grid-col stat">{{ $elem->genUrl }}</div>
                <div class="col-1 themed-grid-col stat">{{ $elem->created_at }}</div>
                <div class="col-1 themed-grid-col stat">{{ $elem->counter }}</div>

            </div>
        @endforeach

    </div>
</div>

</body>
</html>
