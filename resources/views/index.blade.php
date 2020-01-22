@extends('base')

@section('title', 'Titulo')

@section('stylesheet')
    @parent

    <link rel="stylesheet" href="{{ asset('css/home.css') }}" >
@endsection

@section('content')
    <h1>Index</h1>
@endsection