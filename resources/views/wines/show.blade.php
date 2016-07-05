@extends('layouts.layout')

@section('content')
            <h2>
        {{ $wine->title   }}:
        {{ $wine->flavour }}.
            </h2>
@stop
