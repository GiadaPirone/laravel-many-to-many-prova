@extends('layouts.admin')

@section('content')

<h1>Aggiungi</h1>

<form action="{{route("admin.types.store")}}" method="POST" class="needs-validation">
    @csrf

     {{-- nome typologia progetto --}}
     <div class="mb-3">
        <label for="name" class="form-label">Inserisci Nuova Tipologia</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" value="{{old("name")}}">

        @error("name")
            <div class="invalid-feedback">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>




</form>
@endsection