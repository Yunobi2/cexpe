@extends('layout')

@section('title','Talleres')

@section('content')
    <h2>Talleres</h2>
    <ul>
        @foreach($Talleres as $item)
            <li>{{ $item['titulo']}}</li>
        @endforeach
    </ul>
@endsection