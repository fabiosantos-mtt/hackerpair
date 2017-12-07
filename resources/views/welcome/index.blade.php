@extends('layouts.full')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <div>
            <h1>Build Faster with HackerPair</h1>
            <h2 class="d-none d-md-block">Learn, teach, hack, and make friends with developers in your city.</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col mh-100">
            <h2>The Latest Events</h2>
            @include('partials/_events_table', ['events' => $events])

        </div>
    </div>

@endsection

