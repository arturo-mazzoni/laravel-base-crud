@extends('layouts.app')

@section('title', 'index cars')

@section('content')

  <h1>Elenco Automobili</h1>
  <a href="{{ route('cars.create') }}">Inserisci una nuova auto</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marca</th>
        <th scope="col">Modello</th>
        <th scope="col">Cilindrata</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Operazioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($automobili as $automobile)
        <tr>
          <th scope="row">{{ $automobile->id }}</th>
          <td>{{ $automobile->marca }}</td>
          <td>{{ $automobile->modello }}</td>
          <td>{{ $automobile->cilindrata }}</td>
          <td>{{ $automobile->prezzo }}</td>
          <td>
            <a href="{{ route('cars.show', $automobile->id) }}" class="btn btn-info">Dettagli</a>
            <a href="{{ route('cars.edit', $automobile->id) }}" class="btn btn-warning">Modifica</a>
            <form action="{{ route('cars.destroy', $automobile->id) }}" method="post" class="d-inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
