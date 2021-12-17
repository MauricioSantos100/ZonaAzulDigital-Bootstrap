@extends('layouts.app')

@section('content')
@include('layouts.headers.header')

<div class="container">
  <div class="text-center">
    <h1>@if(isset($estacionamento))Editar Estacionamento @else Cadastrar Estacionamento @endif</h1>
  </div>

  @if(isset($errors) && count($errors)>0)
  <div class="text-center mt-4 mb-4 p-2 alert-danger">
    @foreach($errors->all() as $erro)
    {{$erro}}<br>
    @endforeach
  </div>
  @endif

  @if(isset($estacionamento))
  <form class="row g-3" name="formEditEstacionamento" id="formEstacionamento" method="post" action="{{url('/estacionamentos',$estacionamento->id)}}">
    @method('PUT')
    @else
    <form class="row g-3" name="formCadEstacionamento" id="formEstacionamento" method="post" action="{{url('/estacionamentos')}}">
      @endif
      @csrf

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-building"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Nome') }}" type="text" name="nome" id="nome" value="{{$estacionamento->nome ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-file-earmark-medical-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('CNPJ') }}" type="text" name="cnpj" id="cnpj" value="{{$estacionamento->cnpj ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Email') }}" type="text" name="email" id="email" value="{{$estacionamento->email ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Telefone') }}" type="cel" name="telefone" id="telefone" value="{{$estacionamento->telefone ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-signpost-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Rua') }}" type="text" name="rua" id="rua" value="{{$estacionamento->rua ?? ''}}" required>
      </div>
      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-123"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Numero') }}" type="text" name="numero" id="numero" value="{{$estacionamento->numero ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-geo-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Bairro') }}" type="text" name="bairro" id="bairro" value="{{$estacionamento->bairro ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="bi bi-map-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Cidade') }}" type="text" name="cidade" id="cidade" value="{{$estacionamento->cidade ?? ''}}" required>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">@if(isset($estacionamento))Editar @else Cadastrar @endif</button>
      </div>
    </form>
</div>

@endsection