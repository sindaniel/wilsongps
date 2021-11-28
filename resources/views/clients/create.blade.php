@extends('layouts.app')

@section('content')
<h2>Crear Cliente</h2>
{{ Aire::open()->route('clients.store')}}
  

    {{ Aire::input('name', 'Nombre del cliente')}}

    {{ Aire::input('type', 'Tipo de vehículo')->helpText('Moto, carro')}}


    {{ Aire::number('phone', 'Número gps')}}
      
    
  {{ Aire::submit('Crear usuario') }}
    
  {{ Aire::close() }}

@endsection
