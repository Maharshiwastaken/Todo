@extends('layouts.app')
@section('title')
    Todo
@endsection
@section('content')
    <div class="row mt-3">
    <div class="col-12 align self-center">
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">{{$todo->title}}</li>
                <a href="/details/{{$todo->id}}">Details</a>

{{--                Why doesn't this work? --}}
{{--                <li class="list-group-item"><a href="/details.blade" style="color: cornflowerblue">{{$todo->name}}</a></li>--}}
            @endforeach
        </ul>
    </div>
    </div>
@endsection
