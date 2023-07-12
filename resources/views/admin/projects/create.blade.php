@extends('layouts.admin')

@section('content')

<h1>Crea Un Nuovo Progetto</h1>

    <form action="{{route("admin.projects.store")}}" method="POST" class="needs-validation">
        @csrf

        {{-- titolo --}}
        <div class="mb-3">
            <label for="title" class="form-label">Inserisci Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" aria-describedby="emailHelp" value="{{old("title")}}">

            @error("title")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">Inserisci Description</label>
            <textarea class="form-control  @error('description') is-invalid @enderror" id="description" rows="3" name="description" value="{{old("description")}}"></textarea>

            @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        {{-- categoria --}}
        <div class="mb-3">

            <label for="type_id">Categoria</label>
            <select class="form-control" name="type_id" id="type_id">
                <option value="" selected disabled>Seleziona la categoria</option>
                @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
                
            </select>
        </div>

        {{-- immagine --}}
        <div class="mb-3">
            <label for="image" class="form-label">Inserisci URL Img</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror " id="image" name="image" aria-describedby="emailHelp">

            @error("thumb")
                <div class="invalid-feedback">{{$message}}</div>
             @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection