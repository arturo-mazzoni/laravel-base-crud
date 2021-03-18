@extends('layouts.app')

@section('title', 'index cars')

@section('content')

  <h1>Elenco Automobili</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marca</th>
        <th scope="col">Modello</th>
        <th scope="col">Cilindrata</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Descrizione</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <th scope="row">{{ $automobile->id }}</th>
          <td>{{ $automobile->marca }}</td>
          <td>{{ $automobile->modello }}</td>
          <td>{{ $automobile->cilindrata }}</td>
          <td>{{ $automobile->prezzo }}</td>
          <td>{{ $automobile->descrizione }}</td>
        </tr>
    </tbody>
  </table>
@endsection
