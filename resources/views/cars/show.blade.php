@extends('layouts.app')

@section('page-title')

@section('content')

<h1>{{$cars->model}}</h1>
<h1>{{$cars->brand}}</h1>
<h2>{{$cars->cc}}</h2>

<a href="{{route('cars.index')}}" class="btn btn-secondary">Torna alla lista</a>

@endsection
