@extends('layouts.app')

@section('title') Cutter @endsection

@section('content')

    <h1 id="e">Cutter</h1>

    @include('inc.messagesErrors')

    <form  id="post-form" method="post" action="">
        @csrf

        <label class="newUrl" for="newUrl">Get your new link</label>
        <div class="input-group has-validation mb-2 newUrl">
            <span onclick="copyToClipboard('newUrl')" class="input-group-text" id="copNew">Copy link</span>
            <input type="text" class="form-control " value="{{ $newUrl }}" name="newUrl" id="newUrl" required disabled>
        </div>

@auth()

        <label class="msg">Customize your new link if you want</label>
        <div class="input-group has-validation ">
            <span onclick="copyToClipboard('customUrl')" id="copy-button"  class="input-group-text copyCust" >Copy link</span>
            <input type="text" class="form-control" value="{{ $newUrl }}" name="customUrl" id="customUrl">
        </div>

        <input type="hidden" class="form-control " value="{{ $newUrl }}" name="genUrl" id="genUrl">

        <button type="submit" id="#btnCustomize" class="btn btn-info mt-2  btnCustomize ">Customize</button>
@endauth

    </form>

    <div class="container btnHomeCont">
        <a href="{{ route('home') }}"><button class="btn btn-info btnHome">Home page</button></a>
    </div>

@endsection


