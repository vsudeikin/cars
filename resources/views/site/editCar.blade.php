@extends('layouts.index')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('car.store') }}">
          <div class="form-group">
            <label for="carName">Модель авто:</label>
            <input type="text" class="form-control" id="carName" name="model"  placeholder="Модель авто" value="{{ $car->models or ''}}" required="true">
            <input type="hidden" name="id" value="{{ $car->id or ''}}">
          </div>
          <div class="form-group">
            <label for="carYear">Год выпуска:</label>
            <input type="date" class="form-control" id="carYear" name="year"  placeholder="Год выпуска" value="{{ $car->year or ''}}" required="true">
          </div>
          <div class="form-group">
            <label for="carColor">Цвет:</label>
            <input type="text" class="form-control" id="carColor" name="color"  placeholder="Цвет" value="{{ $car->color or ''}}" required="true">
          </div>
           {{ csrf_field() }}
       
          <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection