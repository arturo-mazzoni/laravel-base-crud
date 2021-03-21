@extends('layouts.app')

@section('title', 'gestione cars')

@section('content')

  <h1>Gestione Automobili</h1>

  <div class="container">
    <form method="post" action="{{ route('cars.update',$automobile->id) }}">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="exampleInputmarca">Marca</label>
        <input type="text" class="form-control" id="exampleInputmarca" name="marca" value="{{ $automobile->marca }}">
      </div>
      <div class="form-group">
        <label for="exampleInputmodello">Modello</label>
        <input type="text" class="form-control" id="exampleInputmodello" name="modello" value="{{ $automobile->modello }}">
      </div>
      <div class="form-group">
        <label for="exampleInputcilindrata">Cilindrata</label>
        <input type="text" class="form-control" id="exampleInputcilindrata" name="cilindrata" value="{{ $automobile->cilindrata }}">
      </div>
      <div class="form-group">
        <label for="exampleInputprezzo">Prezzo</label>
        <input type="text" class="form-control" id="exampleInputprezzo" name="prezzo" value="{{ $automobile->prezzo }}">
      </div>
      <div class="form-group">
        <label for="exampleFormControldescrizione">Descrizione</label>
        <textarea class="form-control" id="exampleFormControldescrizione" rows="3" name="descrizione">{{ $automobile->descrizione }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
  </div>

@endsection