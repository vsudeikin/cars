@extends('layouts.index')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('owner.store') }}">
          <div class="form-group">
            <label for="ownerName">Владелец авто*:</label>
            <input type="text" class="form-control" id="ownerName" name="name"  placeholder="Enter name" value="{{ $owner->name or ''}}" required="true">
            <input type="hidden" name="id" value="{{ $owner->id or ''}}">
          </div>
        @if (isset($owner))  
        @if ($owner->cars->count() > 0)
          <div class="form-group">
            <label for="ownerCars">Автомобили владельца:</label>
            <table class="table" id="ownerCars">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Марка</th>
                  <th>Год</th>
                  <th>Цвет</th>
                </tr>
              </thead>
              <tbody>
                    @foreach($owner->cars as $car)
                    <tr>
                      <th scope="row">{{ $car->id }}</th>
                      <td>{{ $car->models }}</td>
                      <td>{{ $car->year }}</td>
                      <td>{{ $car->color }}</td>
                    </tr>
                    @endforeach
             </tbody>
            </table>
          </div>
        @endif
        @endif
        {{ csrf_field() }}
         
          <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
