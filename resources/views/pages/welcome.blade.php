@extends('layouts.layout')

@section('content')
<!-- OG php syntax
<?php foreach ($salads as $salad) : ?>
    <li><?= $salad; ?></li>
<?php endforeach; ?>
-->

@if (empty($salad))
    There are no salads.
@else
    Here are your salads!
@endif

@foreach ($salads as $salad)
    <li>{{ $salad }}</li>
@endforeach
@stop
