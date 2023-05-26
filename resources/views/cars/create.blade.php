@extends('layouts.app')


@section('page-title')

@section('content')
<form method="POST" action="{{route('cars.store')}}">

    @csrf

    <div class="mb-3">
        <label for="brand" class="form-label">Brand:</label>
                               <!-- un metodo per dare l'errore se tu non metti i dati (validazioni)-->
        <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{old('brand')}}">
        <!-- ti da il messagio che non hai compilato i dati necessari -->
        @error('brand')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="model" class="form-label">Model:</label>
        <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{old('model')}}">
        @error('model')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
        @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="cc" class="form-label">cc:</label>
        <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc" name="cc" value="{{old('cc')}}">
        @error('cc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>
    <div class="mb-3">
        <label for="year_release" class="form-label">Anno:</label>
        <input type="date" class="form-control @error('year_release') is-invalid @enderror" id="year_release" name="year_release" value="{{old('year_release')}}">
        @error('year_release')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>


    <button type="submit" class="btn btn-primary">Salva</button>
</form>


@endsection
