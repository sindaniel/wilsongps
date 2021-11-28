@extends('layouts.app')

@section('content')
<h2>Editar Cliente</h2>

{{ Aire::open()->route('clients.update', $client)->bind($client)}}
  

    {{ Aire::input('name', 'Nombre del cliente')}}

    {{ Aire::input('type', 'Tipo de vehículo')->helpText('Moto, carro')}}


    {{ Aire::number('phone', 'Número gps')}}
      
    
  {{ Aire::submit('Editar usuario') }}
    
  {{ Aire::close() }}

@endsection
