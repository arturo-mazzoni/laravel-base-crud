@extends('layouts.app')

@section('title', 'gestione cars')

@section('content')

  <h1>Gestione Automobili</h1>

  <div class="container">
    <form method="post" action="{{ route('cars.store') }}">
      @method('POST')
      @csrf
      <div class="form-group">
        <label for="exampleInputmarca">Marca</label>
        <input type="text" class="form-control" id="exampleInputmarca" name="marca">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputmodello">Modello</label>
        <input type="text" class="form-control" id="exampleInputmodello" name="modello">
      </div>
      <div class="form-group">
        <label for="exampleInputcilindrata">Cilindrata</label>
        <input type="text" class="form-control" id="exampleInputcilindrata" name="cilindrata">
      </div>
      <div class="form-group">
        <label for="exampleInputprezzo">Prezzo</label>
        <input type="text" class="form-control" id="exampleInputprezzo" name="prezzo">
      </div>
      <div class="form-group">
        <label for="exampleFormControldescrizione">Descrizione</label>
        <textarea class="form-control" id="exampleFormControldescrizione" rows="3" name="descrizione"></textarea>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection