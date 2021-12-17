@extends('layouts.app')

@section('content')
@include('layouts.headers.header')

<div class="container">
    <div class="text-center">
        <h1>Estacionamentos</h1>
    </div>
    <div style="text-align: left;">
        <a href="{{ url('estacionamentos/create') }}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <br>


    <div class="table-responsive">
        @csrf
        <table class="table align-items-center table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($estacionamento as $estacionamentos)
                <tr>
                    <th>
                        <a href="{{ url("estacionamentos/$estacionamentos->id") }}">
                            {{ $estacionamentos->nome }}
                        </a>
                    </th>
                    <th>
                        <a href="{{ url("estacionamentos/$estacionamentos->id") }}">
                            {{ $estacionamentos->cnpj }}
                        </a>
                    </th>
                    <th>
                        <a href="{{ url("estacionamentos/$estacionamentos->id") }}">
                            {{ $estacionamentos->email }}
                        </a>
                    </th>
                    <th> <a href="{{ url("estacionamentos/$estacionamentos->id") }}">
                            {{ $estacionamentos->telefone }}
                        </a>
                    </th>
                    <th style="float: right; display: flex;">
                        <a style="padding-right: inherit;" href="{{ url("estacionamentos/$estacionamentos->id/edit") }}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form action="/estacionamentos/{{ $estacionamentos->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Deletar</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection