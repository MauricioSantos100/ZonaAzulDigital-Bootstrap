@extends('layouts.app')

@section('content')
    @include('layouts.headers.header')

    <div class="container">
        <div class="text-center">
            <h1>Usuarios</h1>
        </div>

        <div style="text-align: left;">
            <a href="{{ url('usuarios/create')}}">
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
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuario as $usuarios)
                        <tr>
                            <th>
                                <a href="{{ url("usuarios/$usuarios->id") }}">
                                    {{ $usuarios->nome }}
                                </a>
                            </th>
                            <th>
                                <a href="{{ url("usuarios/$usuarios->id") }}">
                                    {{ $usuarios->cpf }}
                                </a>
                            </th>
                            <th>
                                <a href="{{ url("usuarios/$usuarios->id") }}">
                                    {{ $usuarios->telefone }}
                                </a>
                            </th>
                            <th>
                                <a href="{{ url("usuarios/$usuarios->id") }}">
                                    {{ $usuarios->email }}
                                </a>
                            </th>
                            <th style="float: right; display: flex;">
                                <a style="padding-right: inherit;" href="{{ url("usuarios/$usuarios->id/edit") }}">
                                    <button class="btn btn-primary">Editar</button>
                                </a>
                                <form action="/usuarios/{{ $usuarios->id }}" method="POST">
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
    </div>
@endsection
