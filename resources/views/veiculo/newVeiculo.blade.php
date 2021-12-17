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
      <!-- marca -->
      <div class="input-group input-group-alternative mb-3 col-12">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-building"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Marca') }}" type="text" name="marca" id="marca" value="{{$veiculo->marca ?? ''}}" required>
      </div>

      <!-- modelo -->
      <div class="input-group input-group-alternative mb-3 col-6">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-car"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Modelo') }}" type="text" name="modelo" id="modelo" value="{{$veiculo->modelo ?? ''}}" required>
      </div>

      <!-- placa -->
      <div class="input-group input-group-alternative mb-3 col-6">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-123"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Placa') }}" type="text" name="placa" id="placa" value="{{$veiculo->placa ?? ''}}" required>
      </div>

      <!-- cor -->
      <div class="input-group input-group-alternative mb-3 col-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-brush-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Cor') }}" type="text" name="cor" id="cor" value="{{$veiculo->cor ?? ''}}" required>
      </div>

      <!-- ano -->
      <div class="input-group input-group-alternative mb-3 col-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-calendar2-event-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Ano') }}" type="text" name="ano" id="ano" value="{{$veiculo->ano ?? ''}}" required>
      </div>

      <!-- select user selected -->

      <div class="input-group input-group-alternative mb-3 col-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
        </div>
        <select class="form-control" name="id_usuario" id="id_usuario" required>
          <!-- selecione o usuario se existir veiculo and --> 
          @if(isset($veiculo))
           
            @foreach($usuarios as $usuario)
              @if($usuario->id == $veiculo->id_usuario)
                <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
              @endif
            @endforeach
            @foreach($usuarios as $usuario)
              <option value="{{$veiculo->id_usuario}}">{{$usuario->nome}}</option>
            @endforeach
            
          @elseif(!isset($veiculo))
            <option value="">Selecione o usuario</option>
            @foreach($usuarios as $usuario)
              <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
            @endforeach
          @endif

          

        </select>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">@if(isset($veiculo))Editar @else Cadastrar @endif</button>
      </div>
    </form>
</div>

@endsection