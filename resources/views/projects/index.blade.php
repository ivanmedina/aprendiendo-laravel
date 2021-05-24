@extends('layout')
@section('title','Portafolio')
@section('content')
    <h1>Portafolio</h1>
    @auth
    <a href="{{route('projects.create')}}">Crear Proyecto</a>
    @endauth
    <ul>
        @forelse($proyectos as $proyecto)
                <li>
                    <a href="{{route('projects.show',$proyecto)}}">{{$proyecto->title}}</a>
                </li>
        @empty
            <li>No hay elementos para mostrar</li>
        @endforelse
        {{$proyectos->links()}}
    </ul>
@endsection
