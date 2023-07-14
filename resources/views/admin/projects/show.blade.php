@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        
        <div class="card p-0 mb-4" style="width: 18rem;">
            <img class="card-img-top" src="{{ $project->image }}" alt="{{ $project->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p>{{$project->description}}</p>
                <p>Categoria: {{$project->type ? $project->type->name : "non selezionata!"}}</p>
                <p>Technology: </p>
                
                <ul>
                    @foreach ($project->technologies as $technology)
                    <li>{{$technology->name}}</li>
                    @endforeach
                </ul>

                <button type="button" class="btn btn-light">
                    <a href="{{route("admin.projects.index")}}">Lista Projects</a>                       
                </button>

               
            </div>

        </div>
       
    </div>
</div>




@endsection