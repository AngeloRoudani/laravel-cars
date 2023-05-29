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
                        <a class="btn btn-primary my-2 me-2 " href="{{route('cars.show', ['car' => $car->id])}}">Vedi</a>
                        <a class="btn btn-warning my-2 me-2" href="{{route('cars.edit', ['car' => $car->id])}}">Modifica</a>
                        <form   class="form_delete_car my-2"  action="{{route('cars.destroy',['car' => $car->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Confermi di voler eliminare l'elemento selezionato?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Conferma eliminazione</button>
            </div>
            </div>
        </div>
    </div>

@endsection


