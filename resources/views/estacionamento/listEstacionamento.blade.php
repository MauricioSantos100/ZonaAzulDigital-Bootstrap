@extends('templates.template')

@section('content')

<div class="container">
    <div class="text-center">
      <h1>Estacionamentos</h1>
    </div>
    <div class="col-lg-12" style="text-align: right;">
        <a href="{{url("estacionamentos/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    @csrf
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">cnpj</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th scope="col">telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estacionamento as $estacionamentos)
                <tr>
                    <th scope="row">{{$estacionamentos -> id}}</th>
                    <th>{{$estacionamentos -> cnpj}}</th>
                    <th>{{$estacionamentos -> nome}}</th>
                    <th>{{$estacionamentos -> email}}</th>
                    <th>{{$estacionamentos -> telefone}}</th>
                    <th>
                        <a href="{{url("estacionamentos/$estacionamentos->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("estacionamentos/$estacionamentos->id")}}" href="" class="js-del">
                            <button class="btn btn-danger">deletar</button>
                        </a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
