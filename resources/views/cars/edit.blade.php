@extends('layouts.app')


@section('page-title')

@section('content')
<form method="POST" action="{{route('cars.update', ['car'=>$car->id])}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="brand" class="form-label">Brand:</label>
                               <!-- un metodo per dare l'errore se tu non metti i dati (validazioni)-->
        <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{old('brand', $car->brand)}}">
        <!-- ti da il messagio che non hai compilato i dati necessari -->
        @error('brand')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="model" class="form-label">Model:</label>
        <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{old('model',$car->model)}}">
        @error('model')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price',$car->price)}}">
        @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="cc" class="form-label">cc:</label>
        <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc" name="cc" value="{{old('cc', $car->cc)}}">
        @error('cc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>
    <div class="mb-3">
        <label for="year_release" class="form-label">Anno:</label>
        <input type="date" class="form-control @error('year_release') is-invalid @enderror" id="year_release" name="year_release" value="{{old('year_release', $car->year_release)}}">
        @error('year_release')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>
    <div class="btn-group" role="group">
        @foreach ($optionals as $optional)
        @if ($errors->any())
            <input id="optional_{{$optional->id}}" @if (in_array($optional->id, old('optionals', []))) checked @endif type="checkbox" name="optionals[]" value="{{$optional->id}}">
        @else
            <input id="optional_{{$optional->id}}" @if ($car->optionals->contains($optional->id)) checked @endif type="checkbox" name="optionals[]" value="{{$optional->id}}">
        @endif
        <label for="optional_{{$optional->id}}" class="form-label">{{$optional->name}}</label><br>

    @endforeach
    </div>
    @error('optionals')
            <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Salva</button>
</form>


@endsection
