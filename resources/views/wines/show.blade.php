@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>
                {{ $wine->title   }}:
                {{ $wine->flavour }}.
            </h2>

            <ul class="list-group">
                @foreach ($wine->notes as $note)
                    <li class="list-group-item"> {{ $note-> body }}</li>
                @endforeach
            </ul>

            <hr>

            <h3>Add a New Note</h3>

            <form method="POST" action="/wines/{{ $wine->id }}/notes ">
            <!-- line below is needed to post -->
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>

            <form action=/wines>
                <button type="submit" class="btn btn-primary">Index</button>
            </form>
        </div>
    </div>
@stop
