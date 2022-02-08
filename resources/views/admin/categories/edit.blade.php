@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Categorias</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
            <li class="breadcrumb-item">Edição de Categoria</li>
        </ol>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary"><i class="fas fa-angle-left"></i> Voltar para Categorias</a>
    </div>
</div>
@stop

@section('content')
    <div class="content row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados da Categoria</h3>
                </div>
                <div class="card-body">

                    @include('admin.includes.alerts')

                    <form action="{{ route('admin.categories.update', $category->id) }}" class="form" method="POST">
                        <input type="hidden" name="_method" value="PUT">

                        @include('admin.categories._partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop