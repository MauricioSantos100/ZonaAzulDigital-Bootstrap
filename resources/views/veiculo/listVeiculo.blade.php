@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')

<div class="container">
    <div class="text-center">
      <h1>Veículos</h1>
    </div>
    <div class="col-lg-12" style="text-align: right;">
        <a href="{{url("veiculos/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    @csrf
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Placa</th>
            <th scope="col">Ano</th>
            <th scope="col">Cor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculo as $veiculos)
                <tr>
                    <th scope="row">{{$veiculos -> id}}</th>
                    <th>{{$veiculos -> marca}}</th>
                    <th>{{$veiculos -> modelo}}</th>
                    <th>{{$veiculos -> placa}}</th>
                    <th>{{$veiculos -> ano}}</th>
                    <th>{{$veiculos -> cor}}</th>
                    <th>
                        <a href="{{url("veiculos/$veiculos->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("veiculos/$veiculos->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("veiculos/$veiculos->id")}}" href="" class="js-del">
                            <button class="btn btn-danger">deletar</button>
                        </a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection