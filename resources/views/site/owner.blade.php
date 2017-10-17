<thead>
    <tr>
      <th>#</th>
      <th>Имя</th>
      <th>Количество авто</th>
      <th>Удалить</th>
    </tr>
</thead>

<tbody>
@foreach($list as $owner )
    <tr>
      <td>
        {{ $owner->id }}
      </td>
      <td>
        <a href='{{ route("owner.edit", $owner->id) }}' title="Редактировать">{{ $owner->name }}</a>
      </td>
      <td> {{ $owner->cars->count() }} </td>
      <td>
        <form action='{{ route("car.destroy", $owner->id) }}' method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input class="btn btn-danger btn-sm" type="submit" value="Удалить">
        </form>
      </td>
    </tr>
@endforeach
</tbody>

<div class="container">
<a class="btn btn-primary btn-sm" href='{{ route("owner.create") }}'>Добавить</a>
</div>