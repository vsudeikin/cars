@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h1>Ваш токен.</h1>
      <p>
        {{ $token or ''}}  
      </p>
    </div>
</div>
@endsection
