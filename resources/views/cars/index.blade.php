@extends('layouts.app')

@section('title', 'index cars')

@section('content')

  <h1>Elenco Automobili</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
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
          <td><a href="">Dettagli</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
