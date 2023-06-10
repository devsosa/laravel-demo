@extends('example')
@section('title', 'About')

@section('sidebar')
    @parent
    <p>Contenido Sidebar About.</p>
@endsection
@section('content')
    <p>Este es parte del cuerpo del Contenido del About.</p>
@endsection