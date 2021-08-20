@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Hola {{ auth()->user()->name }}!</h1>
    </div>
@endsection
