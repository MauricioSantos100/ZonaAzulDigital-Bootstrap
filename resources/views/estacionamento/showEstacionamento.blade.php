@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')

  <div class="container">
    <form class="row g-3">
      <div class="col-12 text-center">
        <label for="inputNome" class="form-label">
          <h5>{{$estacionamento->cnpj}}</h5>
        </label>
      </div>

      <div class="col-md-12">
        <label for="inputEmail" class="form-label">Nome: </label>
        <label for="inputEmail" class="form-label">{{$estacionamento->nome}}</label>
      </div>

      <div class="col-md-12">
        <label for="inputPhone" class="form-label">E-mail: </label>
        <label for="inputPhone" class="form-label">{{$estacionamento->email}}</label>
      </div>

      <div class="col-md-12">
        <label for="inputEmail" class="form-label">Telefone: </label>
        <label for="inputEmail" class="form-label">{{$estacionamento->telefone}}</label>
      </div>

      <div class="col-md-12">
        <label for="inputEmail" class="form-label">Rua: </label>
        <label for="inputEmail" class="form-label">{{$estacionamento->rua}}</label>
      </div>

      <div class="col-md-12">
        <label for="inputEmail" class="form-label">Bairro: </label>
        <label for="inputEmail" class="form-label">{{$estacionamento->bairro}}</label>
      </div>

      <div class="col-md-12">
        <label for="inputEmail" class="form-label">Cidade: </label>
        <label for="inputEmail" class="form-label">{{$estacionamento->cidade}}</label>
      </div>
      <div class="col-md-12">
        <label for="inputEmail" class="form-label">Numero: </label>
        <label for="inputEmail" class="form-label">{{$estacionamento->numero}}</label>
      </div>
    </form>
  </div>

@endsection
