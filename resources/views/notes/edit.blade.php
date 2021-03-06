@extends('layouts.layout')

@section('content')
    <h1>Edit the Note</h1>

    <form method="POST" action="/notes/{{ $note->id }}">
    {{ method_field('PATCH') }}
    <!-- line below is needed to post -->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class="form-group">
            <textarea name="body" class="form-control">{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Note</button>
        </div>
    </form>

    <form action=/wines>
        <button type="submit" class="btn btn-primary">Index</button>
    </form>
@stop
