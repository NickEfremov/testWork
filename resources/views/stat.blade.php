@extends('layouts.base')

@section('title') Statistic @endsection

@section('content')
    <h1>Statistic</h1>

    <div class="container">

        <div class="row mb-3">
            <div class="col-1 themed-grid-col stat">Position</div>
            <div class="col-8 themed-grid-col stat">Users original links</div>
            <div class="col-2 themed-grid-col stat">Created at</div>
            <div class="col-1 themed-grid-col stat">Redirects</div>
        </div>

        @foreach($data as $elem)
            <div class="row mb-3">
                <div class="col-1 themed-grid-col stat">{{ $elem->id }}</div>
                <div class="col-8 themed-grid-col stat"><a href="{{ $elem->origUrl }}">{{ $elem->origUrl }}</a></div>
                <div class="col-2 themed-grid-col stat">{{ $elem->created_at }}</div>
                <div class="col-1 themed-grid-col stat">{{ $elem->counter }}</div>
            </div>
        @endforeach

    </div>

@endsection
