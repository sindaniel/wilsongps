@extends('layouts.app')

@section('content')

    <p>
        <a class="btn btn-success" href="{{ route('clients.create') }}">Nuevo cliente</a>
    </p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cliente</th>
           
                <th scope="col">Numero</th>
                <th></th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr >
                <td>{{ $client->name }}</td>
                

                <td>
                    {{ $client->phone }} <br>
                    <small class='text-muted'>{{ $client->type }}</small>
                </td>
                <td class='text-right'> 
                    <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">Actualizar</a>    
                    <form method="POST" onclick="return confirm('Desea eliminar este registro?');" action="{{ route('clients.destroy', $client) }}" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
             
              </tr>
            @endforeach
        </tbody>
    </table>


    {{ $clients->render() }}

@endsection
