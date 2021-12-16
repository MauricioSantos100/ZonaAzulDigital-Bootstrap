@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')

  <div class="container">
    <form class="row g-3">
      <div class="col-12 text-center">
        <label for="inputNome" class="form-label">
          <h5>{{$usuario->nome}}</h5>
        </label>
      </div>

      <div class="col-md-12">
        <label for="inputEmail" class="form-label">CPF: </label>
        <label for="inputEmail" class="form-label">{{$usuario->cpf}}</label>
      </div>

      <div class="col-md-12">
        <label for="inputPhone" class="form-label">Telefone: </label>
        <label for="inputPhone" class="form-label">{{$usuario->telefone}}</label>
      </div>

      <div class="col-md-12">
        <label for="inputEmail" class="form-label">Email: </label>
        <label for="inputEmail" class="form-label">{{$usuario->email}}</label>
      </div>
    </form>
  </div>

@endsection