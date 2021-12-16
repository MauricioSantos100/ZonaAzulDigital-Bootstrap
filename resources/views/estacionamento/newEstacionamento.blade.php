@extends('templates.template')

@section('content')

<div class="container">
  <div class="text-center">
    <h1>Novo Estacionamento</h1>
  </div>

    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $erro)
              {{$erro}}<br>
          @endforeach
      </div>
    @endif

  <form name="formCad" id="formCad" method="post" action="{{url('estacionamentos')}}" class="row g-3">
    @csrf
    <div class="col-12">
      <label for="inputCnpj" class="form-label">Cnpj</label>
      <input type="text" class="form-control" name="cnpj" id="cnpj">
    </div>

    <div class="col-md-6">
      <label for="inputNome" class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="col-md-6">
      <label for="inputEmail" class="form-label">E-mail</label>
      <input type="text" class="form-control" name="email" id="email">
    </div>

    <div class="col-8">
      <label for="inputTelefone" class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telefone" id="telefone">
    </div>

    <div class="col-4">
      <label for="inputRua" class="form-label">Rua</label>
      <input type="text" class="form-control" name="rua" id="rua">
    </div>

    <div class="col-4">
      <label for="inputBairro" class="form-label">Bairro</label>
      <input type="text" class="form-control" name="bairro" id="bairro">
    </div>

    <div class="col-4">
      <label for="inputCidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade">
    </div>

    <div class="col-4">
      <label for="inputNumero" class="form-label">Numero</label>
      <input type="text" class="form-control" name="numero" id="numero">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
</div>

@endsection
