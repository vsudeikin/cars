<thead>
    <tr>
      <th>#</th>
      <th>Название</th>
      <th>Год выпуска</th>
      <th>Цвет</th>
      <th>Удалить</th>
    </tr>
</thead>

<tbody>
@foreach($list as $car )
    <tr>
      <td>
        {{ $car->id }}
      </td>
      <td>
        <a href='{{ route("car.edit", $car->id) }}' title="Редактировать">{{ $car->models }}</a>
      </td>
      <td> {{$car->year}} </td>
      <td> {{$car->color}} </td>
      <td>
        <form action='{{ route("car.destroy", $car->id) }}' method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input class="btn btn-danger btn-sm" type="submit" value="Удалить">
        </form>
      </td>
    </tr>
@endforeach
</tbody>

<div class="container">
<a class="btn btn-primary btn-sm" href='{{ route("car.create") }}'>Добавить</a>
</div>