@extends('adminlte::page')

@section('title', 'Listagem de Usuários')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Usuários</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Usuários</li>
            </ol>
        </div>
        <div class="col-sm-6 text-right">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Novo Usuário</a>
        </div>
    </div>
@stop

@section('content')
    <div class="content row">
        <div class="col-sm-12">
            <div class="card card-default">
                <div class="card-header">
                    <form action="{{ route('admin.users.search') }}" method="POST" class="form form-inline">
                        @csrf
                            <input type="text" name="filter" id="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                        <button type="submit" class="btn btn-dark"><i class="fas fa-filter"></i> Pesquisar</button>
                    </form>
        
                    @if (isset($filters))
                            <a href="{{ route('admin.users.index') }}">(x) Limpar Resultados da Pesquisa</a>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Url</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        #ações
                                    </td>
                                </tr>     
                                                   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop