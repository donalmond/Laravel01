@extends('layouts.layout')

@section('content')
    <h1>Wines and their many flavours.</h1>

    @foreach ($wines as $wine)
        <div>
            <h2>
        <a href="/wines/{{ $wine->id }}">{{ $wine->title }}</a>
            </h2>
        </div>
    @endforeach
@stop
