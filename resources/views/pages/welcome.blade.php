@extends('layouts.layout')

@section('content')
<!-- OG php syntax
<?php foreach ($wines as $wine) : ?>
    <li><?= $wine; ?></li>
<?php endforeach; ?>
-->

@if (empty($wines))
    There are no wines.
@else
    Here are your wines!
@endif

@foreach ($wines as $wine)
    <li>{{ $wine }}</li>
@endforeach
@stop
