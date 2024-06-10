@extends('layout')
@section('content')
    <div class="card" style="width: 67rem;">
    <div class="card-body">
        <h5 class="card-title">{{$place->name}}</h5>
        <p class="card-text">{{$place->description}}</p>
        <div class="btn-toolbar">
            <a href="/place/{{$place->id}}/edit" class="btn btn-primary mr-3">Edit place</a>
            <form action="/place/{{$place->id}}" method="post">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-warning">Delete place</button>
            </form>
        </div>
    </div>
    </div>
    
@endsection