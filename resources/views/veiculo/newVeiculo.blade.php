@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')


<div class="container">
  <div class="text-center">
    <h1>@if(isset($veiculo))Editar Veiculo @else Cadastrar Veiculo @endif</h1>
  </div>

    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $erro)
              {{$erro}}<br>
          @endforeach
      </div>
    @endif

    @if(isset($veiculo))
      <form class="row g-3" name="formEditVeiculo" id="formVeiculo" method="post" action="{{url('/veiculos',$veiculo->id)}}">
        @method('PUT')
    @else
      <form class="row g-3" name="formCadVeiculo" id="formVeiculo" method="post" action="{{url('veiculos')}}">
    @endif

    @csrf
    <div class="col-12">
      <label for="inputMarca" class="form-label">Marca</label>
      <input type="text" class="form-control" name="marca" id="marca" value="{{$veiculo->marca ?? ''}}" required>
    </div>

    <div class="col-md-6">
      <label for="inputModelo" class="form-label">Modelo</label>
      <input type="text" class="form-control" name="modelo" id="modelo" value="{{$veiculo->modelo ?? ''}}" required>
    </div>

    <div class="col-md-6">
      <label for="placa" class="form-label">Placa</label>
      <input type="text" class="form-control" name="placa" id="placa" value="{{$veiculo->placa ?? ''}}" required>
    </div>

    <div class="col-8">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="text" class="form-control" name="ano" id="ano" value="{{$veiculo->ano ?? ''}}" required>
    </div>

    <div class="col-4">
      <label for="inputCor" class="form-label">Cor</label>
      <input type="text" class="form-control" name="cor" id="cor" value="{{$veiculo->cor ?? ''}}" required>
    </div>

    <select class="form-control" name="id_usuario" id="id_usuario" required>
      <option value="{{$veiculo->relUsuarios->id ?? ''}}">{{$veiculo->relUsuarios->nome ?? 'Proprietario'}}</option>
      @foreach($usuarios as $usuario)
          <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
      @endforeach
    </select><br>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">@if(isset($veiculo))Editar @else Cadastrar @endif</button>
    </div>
  </form>
</div>

@endsection
