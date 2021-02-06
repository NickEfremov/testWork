@extends('layouts.base')

@section('title') Cutter @endsection

@section('content')
    <h1>Cutter</h1>
    @include('inc.messagesErrors')


    <form  id="post-form" method="post" action="">

        @csrf
        <div class="form-group">
            <label for="newUrl">Get your new link</label>
            <input type="text" class="form-control" value="{{ $newUrl }}" name="newUrl" id="newUrl" required disabled>
        </div>
        <div class="form-group">
            <label for="customUrl" id="msg">Customize your new link if you want</label>
            <input type="text" class="form-control" value="{{ $newUrl }}" name="customUrl" id="customUrl">
        </div>
        <input type="hidden" class="form-control" value="{{ $newUrl }}" name="genUrl" id="genUrl">
        <button type="submit" id="#btnCustomize" class="btn btn-info">Customize</button>

    </form>


@endsection


