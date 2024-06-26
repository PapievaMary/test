@extends('layout')
@section('content')
<h1>{{$heading}}</h1>
<p></p>
@if(count($things) == 0)
    No things available
@endif

@foreach ($things as $thing)
<h2>
    {{$thing['name']}}
</h2>
<p>
    {{$thing['description']}}
</p>
@endforeach
@endsection