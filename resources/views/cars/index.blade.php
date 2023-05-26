@extends('layouts.app')


@section('page-title', 'Lista dei formati di cars')

@section('content')
    <a href="{{route('cars.create')}}" class="btn btn-primary">Crea nuovo formato di car</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Cc</th>
            <th scope="col">Anno</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td scope="row">{{$car->id}}</td>
                    <td>{{$car->brand}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->price}}</td>
                    <td>{{$car->cc}}</td>
                    <td>{{$car->year_release}}</td>
                    <td class="d-flex">
                        <a class="btn btn-primary me-2" href="{{route('cars.show', ['car' => $car->id])}}">Vedi</a>
                        <a class="btn btn-warning me-2" href="{{route('cars.edit', ['car' => $car->id])}}">Modifica</a>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


