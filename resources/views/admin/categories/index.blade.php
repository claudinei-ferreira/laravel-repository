@extends('adminlte::page')

@section('title', 'Listagem de Categorias')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Categorias</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Categorias</li>
            </ol>
        </div>
        <div class="col-sm-6 text-right">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Nova Categoria</a>
        </div>
    </div>
@stop

@section('content')
    <div class="content row">



        <div class="col-sm-12">
            <div class="card card-default card-outline">
                <div class="card-header">
                    <form action="{{ route('admin.categories.search') }}" method="POST" class="form form-inline">
                        @csrf
                            <input type="text" name="filter" id="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                        <button type="submit" class="btn btn-dark"><i class="fas fa-filter"></i> Pesquisar</button>
                    </form>
        
                    @if (isset($filters))
                            <a href="{{ route('admin.categories.index') }}">(x) Limpar Resultados da Pesquisa</a>
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
                            @foreach($categories as $category)
                                <tr>
                                    <td scope="row">{{ $category->id }}</td>
                                    <td>{{ $category->title}}</td>
                                    <td>{{ $category->url }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-success">
                                            <i class="fas fa-book-open"></i> Detalhes
                                        </a>
                                        <form class="d-inline" action="{{ route('admin.categories.destroy', ["category" => $category->id]) }}"
                                            method="post" name="delete_category_{{$category->id}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger delete-confirm" data-name="{{ $category->name }}">
                                                <i class="fas fa-trash-alt"></i> Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>     
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop