@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')

  <div class="container">
    <form class="row g-3">
      <div class="col-12 text-center">
        <label for="inputNome" class="form-label">
          <h4>{{$veiculo->placa}}</h4>
        </label>
      </div>

      <div class="col-md-6">
        <label for="inputMarca" class="form-label">Marca: </label>
        <label for="inputMarca" class="form-label">{{$veiculo->marca}}</label>
      </div>

      <div class="col-md-6">
        <label for="inputModelo" class="form-label">Modelo: </label>
        <label for="inputModelo" class="form-label">{{$veiculo->modelo}}</label>
      </div>

      <div class="col-6">
        <label for="inputPlaca" class="form-label">Placa: </label>
        <label for="inputPlaca" class="form-label">{{$veiculo->placa}}</label>
      </div>

      <div class="col-6">
        <label for="inputAno" class="form-label">Ano: </label>
        <label for="inputAno" class="form-label">{{$veiculo->ano}}</label>
      </div>

      <div class="col-4">
        <label for="inputCor" class="form-label">Cor: </label>
        <label for="inputCor" class="form-label">{{$veiculo->cor}}</label>
      </div>
    </form>
  </div>

@endsection