@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')

  <div class="container">
    <div class="text-center">
      <h1>@if(isset($usuario))Editar Usuario @else Cadastrar Usuario @endif</h1>
    </div>

    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $erro)
              {{$erro}}<br>
          @endforeach
      </div>
    @endif

    @if(isset($usuario))
      <form class="row g-3" name="formEditUsuario" id="formUsuario" method="post" action="{{url('/usuarios',$usuario->id)}}">
        @method('PUT')
    @else
      <form class="row g-3" name="formCadUsuario" id="formUsuario" method="post" action="{{url('/usuarios')}}">
    @endif

      @csrf
      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Nome') }}" type="text" name="nome" id="nome" value="{{$usuario->nome ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('CPF') }}" type="text" name="cpf" id="cpf" value="{{$usuario->cpf ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Email') }}" type="text" name="email" id="email" value="{{$usuario->email ?? ''}}" required>
      </div>

      <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
        </div>
        <input class="form-control " placeholder="{{ __('Telefone') }}" type="cel" name="telefone" id="telefone" value="{{$usuario->telefone ?? ''}}" required>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">@if(isset($usuario))Editar @else Cadastrar @endif</button>
      </div>
    </form>
  </div>
</div>

@endsection
