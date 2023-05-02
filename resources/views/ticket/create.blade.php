@extends('base')

@section('content')
    <form action="{{ @route('tickets.store') }}" method="post" >
        @csrf
        @error('*')
        <div class="alert alert-danger" role="alert">
            {{ $message  }}
        </div>

        @enderror
        <div class="row mb-3">
            <input name="project_id" id="project_id" value="1" style="display: none" />
            <div class="col">
                <div class="form-floating">
                    <select class="form-select" id="type" name="type_id" aria-label="Type">
                        <option selected>Type</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id  }}">{{ $type->name  }}</option>
                        @endforeach
                    </select>
                    <label for="type">Type</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <select class="form-select" id="priority" name="priority_id" aria-label="Priorité">
                        <option selected>Priorité</option>
                        @foreach($priorities as $priority)
                            <option value="{{ $priority->id  }}">{{ $priority->name  }}</option>
                        @endforeach
                    </select>
                    <label for="priority">Priorité</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="title" name="title" placeholder="Titre"
                   value="{{ @old('title', $ticket->title) }}">
            <label for="title">Titre</label>
        </div>


        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Description" name="description" id="description">{{ @old('context', $ticket->context) }}</textarea>
            <label for="description">Description</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Contexte" name="context" id="context">{{ @old('context', $ticket->context) }}</textarea>
            <label for="description">Contexte</label>
        </div>

        <div class="form-floating mb-3">
            <input type="url" class="form-control" placeholder="Url" id="url" name="url"
                   value="{{ @old('url', $ticket->url) }}"/>
            <label for="description">Url</label>
        </div>


        <div class="row mb-3">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Browser" id="browser" name="browser"
                           value="{{ @old('browser', $ticket->browser) }}"/>
                    <label for="description">Navigateur</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Os" id="os" name="os"
                           value="{{ @old('os', $ticket->os) }}"/>
                    <label for="description">Système d’exploitation</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Ajouter des images</label>
            <input class="form-control" type="file" id="images" multiple>
        </div>


        <button class="btn btn-primary" type="submit">Ajouter</button>
    </form>

@endsection
