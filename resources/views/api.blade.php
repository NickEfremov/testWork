@extends('layouts.app')

@section('title') Main @endsection

@section('content')
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <div class="container m-5">
        <h1>Cutter API</h1>
            <p class="lead">Cutter has built-in functions. Send GET or POST request
                with yor link and get new short link in server response.<br>
                Example: {{ config('myConf.baseUrl') }}create?url=YOUR LINK</p>
            <p class="lead">
                <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
            </p>
    </div>


    </div>
@endsection

