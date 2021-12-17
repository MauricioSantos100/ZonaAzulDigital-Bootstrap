@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')

    <div class="container">
        <div class="text-center">
            <h1>Veículos</h1>
        </div>

        <div style="text-align: left;">
            <a href="{{ url('veiculos/create') }}">
                <button class="btn btn-success">Cadastrar</button>
            </a>
        </div>
        <br>

        <div class="table-responsive">
            @csrf

            <table class="table align-items-center table-light">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Cor</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($veiculo as $veiculos)
                        <tr>
                            <th>
                                <a href="{{ url("veiculos/$veiculos->id") }}">
                                    {{ $veiculos->marca }}
                                </a>
                            </th>
                            <th>
                                <a href="{{ url("veiculos/$veiculos->id") }}">
                                    {{ $veiculos->modelo }}
                                </a>
                            </th>
                            <th>
                                <a href="{{ url("veiculos/$veiculos->id") }}">
                                    {{ $veiculos->placa }}
                                </a>
                            </th>
                            <th> <a href="{{ url("veiculos/$veiculos->id") }}">
                                    {{ $veiculos->ano }}
                                </a>
                            </th>
                            <th> <a href="{{ url("veiculos/$veiculos->id") }}">
                                    {{ $veiculos->cor }}
                                </a>
                            </th>
                            <th style="float: right; display: flex;">
                                <a style="padding-right: inherit;" href="{{ url("veiculos/$veiculos->id/edit") }}">
                                    <button class="btn btn-primary">Editar</button>
                                </a>
                                <form action="/veiculos/{{ $veiculos->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">deletar</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
