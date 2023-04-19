@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $event->title }}</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-4">Event Details</h4>
                    <p><strong>Date:</strong> {{ $event->date }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                    <p><strong>Description:</strong> {{ $event->description }}</p>
                </div>
            </div>
            <a href="/events/{{ $event->id }}/register" class="btn btn-primary mb-4">Register Attendee</a>
            <a href="{{ route('events.index') }}" class="btn btn-secondary mb-4">Back to Events</a>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Attendees ({{ count($event->attendees) }})</h4>
                    @if(count($event->attendees) > 0)
                    <ul class="list-group">
                        @foreach($event->attendees as $attendee)
                        <li class="list-group-item">{{ $attendee->pivot->name }}</li>
                        @endforeach
                    </ul>
                    @else
                    <p>No attendees found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
