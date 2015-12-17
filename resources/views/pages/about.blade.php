@extends('app')

@section('content')

<h1>About</h1>

@if (count($people))
    <h3>People I Like:</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>

@endif

<p> This is the aobu tme page that just has nonesene teststs.</p>

@stop
