@extends('layouts.base')

@section('title') Statistic @endsection

@section('content')
    <h1>Custom Link</h1>
    @include('inc.messagesErrors')
    <div class="form-group">
        <label>Get your LINK</label>
        <input type="text" class="form-control" value="{{ $newUrl }}" DISABLED>
    </div>
@endsection
