@extends('base')

@section('content')
    <div>
        @foreach($tickets as $ticket)
            <div class="card mb-5">
                <div class="card-body">
                    <h3 class="card-title">{{ $ticket->title }}</h3>
                    <span class="badge text-bg-primary">{{ $ticket->status->name }}</span>
                    <p class="card-text">{{ $ticket->description  }}</p>
                    <a href="{{ @route('tickets.show', ['ticket' => $ticket->id])  }}" class="btn btn-primary">Voir le ticket</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
