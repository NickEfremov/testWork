@extends('layouts.app')

@section('title') Statistic @endsection

@section('content')
    <h1>Statistic</h1>

    <div class="container mb-5 pb-5 statCont">

        <div class="row mb-3">
            <div class="col-1 themed-grid-col stat">Pos.</div>
            <div class="col-4 themed-grid-col stat">Users original links</div>
            <div class="col-4 themed-grid-col stat">Users short links</div>
            <div class="col-2 themed-grid-col stat">Created at</div>
            <div class="col-1 themed-grid-col stat">Redir.</div>

        </div>

        @foreach($data as $elem)
            <div class="row mb-3">
                <div class="col-1 themed-grid-col stat">{{ $i++ }}</div>
                <div class="col-4 themed-grid-col stat"><a href="{{ $elem->origUrl }}">{{ $elem->origUrl }}</a></div>
                <div class="col-4 themed-grid-col stat">{{ $elem->genUrl }}</div>
                <div class="col-2 themed-grid-col stat">{{ $elem->created_at }}</div>
                <div class="col-1 themed-grid-col stat">{{ $elem->counter }}</div>

            </div>
        @endforeach

    </div>
    <div class="container mb-5"><pre></pre></div>
@endsection
