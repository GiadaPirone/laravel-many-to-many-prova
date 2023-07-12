@extends('layouts.admin')

@section('content')

<form action="{{route("admin.types.update", $type->id)}}" method="POST" class="needs-validation">
    @csrf
    @method("PUT")

    <div class="mb-3">
        <label for="name" class="form-label">Modifica Tipologia</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" value="{{old("name")}}">

        @error("name")
            <div class="invalid-feedback">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

@endsection