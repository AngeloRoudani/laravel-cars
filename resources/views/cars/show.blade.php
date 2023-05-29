@extends('layouts.app')

@section('page-title')

@section('content')

<h1>{{$car->model}}</h1>
<h1>{{$car->brand}}</h1>
<h2>{{$car->cc}}</h2>
@foreach ($car->optionals as $optional )

<h3>{{$optional->name . '-'}}</h3>

@endforeach

<a href="{{route('cars.index')}}" class="btn btn-secondary">Torna alla lista</a>

@endsection
