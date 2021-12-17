@extends('layouts.app')

@section('content')
@include('layouts.headers.header')

<div class="container">
  <div class="card">
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
  <br>
  <div class="card">
    <div class="card-header">
      <h4>Veículos</h4>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-light">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Placa</th>
            <th scope="col">Modelo</th>
            <th scope="col">Marca</th>
            <th scope="col">Cor</th>
            <th scope="col">Ano</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($veiculos as $veiculo)

          <tr href="{{ url("veiculos/$veiculo->id") }}">
            <td>
              <a href="{{ url("veiculos/$veiculo->id") }}">
                {{ $veiculo->placa }}
              </a>
            </td>
            <td>
              <a href="{{ url("veiculos/$veiculo->id") }}">
                {{ $veiculo->modelo }}
              </a>
            </td>
            <td>
              <a href="{{ url("veiculos/$veiculo->id") }}">
                {{ $veiculo->marca }}
              </a>
            </td>
            <td>
              <a href="{{ url("veiculos/$veiculo->id") }}">
                {{ $veiculo->cor }}
              </a>
            </td>
            <td>
              <a href="{{ url("veiculos/$veiculo->id") }}">
                {{ $veiculo->ano }}
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endsection