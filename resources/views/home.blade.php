@extends('layouts.homepage-layout')

@section('title', 'Laravel Comics')

@section('comics')
<div class="container">

    <div id="current-series">CURRENT SERIES</div>
    <div class="row row-cols-6">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="card">
                <img src="https://picsum.photos/300/500" alt="" />
                <span><strong>{{$comic['title']}}</strong></span>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('layouts.partials._links')    
@endsection