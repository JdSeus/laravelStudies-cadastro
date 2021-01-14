@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
@if (count($cats) > 0)

            <table class="table table=ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome da Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="/categorias/editar/{{$cat->id}}">Editar</a>
                            <a class="btn btn-sm btn-danger" href="/categorias/apagar/{{$cat->id}}">Apagar</a>
                        </td>
                    </tr>
    @endforeach
                </tbody>
            </table>
@endif
        </div>
        <div class="card-footer">
            <a class="btn btn-sm btn-primary" role="button" href="/categorias/novo">Nova Categoria</a>
        </div>
    </div>
@endsection