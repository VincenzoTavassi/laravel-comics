@extends('layouts.homepage-layout')

@section('comics')
    <h2>Comics</h2>
    @foreach (config('comics') as $comic)
    <p>{{$comic['title']}}</p>
        
    @endforeach
@endsection