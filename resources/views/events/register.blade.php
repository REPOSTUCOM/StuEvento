@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Register Attendee</h1>
    <form method="POST" action="{{ route('attendees.store', ['id' => $event->id]) }}">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-4">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection