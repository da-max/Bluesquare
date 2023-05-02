@extends('base')

@section('content')
    <article class="card">
        <div class="d-flex justify-content-between align-items-center card-header">
            <h1>{{ $ticket->title }}</h1>
            <div class="d-flex">
                <form method="post" class="mx-3" action="{{ @route('tickets.destroy', ['ticket' => $ticket->id]) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <form method="post" action="{{ @route('tickets.destroy', ['ticket' => $ticket->id]) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-warning">Fermer le ticket</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="col">
                <span class="badge text-bg-primary">{{ $ticket->status->name  }}</span>
                <span class="badge text-bg-primary">{{ $ticket->type->name  }}</span>
                <span class="badge text-bg-primary">{{ $ticket->priority->name  }}</span>
            </div>
            <div class="mt-4">
                <h5 class="card-title">Description</h5>
                <p class="card-text">{{ $ticket->description }}</p>
            </div>
            <hr>
            <div class="mt-4">
                <h5 class="card-title">Page concerné</h5>
                <p class="card-text"><a href="{{ $ticket->url }}">{{ $ticket->url }}</a></p>
            </div>
            <hr>
            <div class="mt-4">
                <h5 class="card-title">Navigateur</h5>
                <p class="card-text">{{ $ticket->browser }}</p>
            </div>
            <hr>
            <div class="mt-4">
                <h5 class="card-title">Système d’exploitation</h5>
                <p class="card-text">{{ $ticket->os }}</p>
            </div>
        </div>
    </article>
@endsection
