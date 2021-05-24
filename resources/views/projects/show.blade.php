@extends('layout')
@section('title','Portafolio | '. $project->title)
@section('content')
    <h1>{{ $project->title }}</h1>
    <a href="{{route('projects.edit',$project)}}">Editar</a>
    <form action="{{route('projects.destroy',$project)}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Eliminar</button>
    </form>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection