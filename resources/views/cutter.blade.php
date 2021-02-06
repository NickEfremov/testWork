@extends('layouts.base')

@section('title') Cutter @endsection

@section('content')
    <h1>Cutter</h1>
    @include('inc.messagesErrors')
    <form name="a" action="{{ route('generate') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="userUrl">Enter your HTTP-link</label>
            <input type="text" class="form-control" value="" name="userUrl" placeholder="Enter your HTTP-link"
                   id="userUrl">
        </div>

        <button type="submit" class="btn btn-success">Generate</button>

    </form>
@endsection
