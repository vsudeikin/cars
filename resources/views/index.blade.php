@extends('layouts.index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Редактировать разделы</strong></div>

                <ul class="nav nav-tabs">
                  <li class="nav-item">  
                    <a href="{{ route('main') }}" class="nav-link {{ $car or '' }}">Автомобили</a>
                  </li>  
                  <li class="nav-item">  
                    <a href="{{ route('main', ['id' => 1]) }}" class="nav-link {{ $owner or '' }}">Владельцы</a>
                  </li>  
                </ul>
                </div>
                
                
                <div class="container">
                    <table class="table table-sm">
                        @if (isset($car))
                            @include('site.car')
                        @else
                            @include('site.owner')
                        @endif         
                    </table>
                </div>  


            </div>
        </div>
    </div>
</div>
@endsection