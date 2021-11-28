@extends('layouts.app')

@section('content')
<h2>Editar Cliente</h2>

{{ Aire::open()->route('clients.update', $client)->bind($client)}}
  

    {{ Aire::input('name', 'Nombre del cliente')}}

    {{ Aire::input('type', 'Tipo de vehículo')->helpText('Moto, carro')}}


    {{ Aire::number('phone', 'Número gps')}}
      

    <p>
        {{ Aire::submit('Editar usuario') }}
        <a class="btn btn-secondary float-right" href="{{ route('clients.index') }}" >Regresar</a>
    </p>
  
    
  {{ Aire::close() }}

@endsection
