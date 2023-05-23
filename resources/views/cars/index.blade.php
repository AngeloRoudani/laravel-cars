@include('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Prezzo</th>
                <th scope="col">cc</th>
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
                        <td class="d-flex">
                            <a class="btn btn-primary me-3" href="#">Dettagli</a>
                            <a class="btn btn-secondary me-3" href="#">Modifica</a>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <!--onclick="return confirm('Are you sure?')"-->
                                <button type="submit" class="btn btn-danger delete">Elimina</button>
                            </form>
                        </td>
                    </tr>
        
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
