@extends('example')
@section('title', 'Home')

@section('sidebar')
    @parent
    <p>Este es un codigo en el master Sidebar.</p>
@endsection
@section('content')
    <p>Este es parte del cuerpo del Contenido.</p>
@endsection