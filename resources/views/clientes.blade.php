@extends('layout.app', ["current"=>"clientes"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Clientes</h5>
@if(count($clis) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF/CNPJ</th>
                    <th>CEP</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($clis as $cli)
                <tr>
                    <td>{{$cli->id}}</td>
                    <td><a href="/clientes/ver/{{$cli->id}}">{{$cli->nome}}</a></td>
                @if(empty($cli->cpf))
                    <td>{{$cli->cnpj}}</td>
                @else
                    <td>{{$cli->cpf}}</td>
                @endif                    
                    <td>{{$cli->cep}}</td>
                    <td>{{$cli->email}}</td>
                    <td>
                        <a href="/clientes/editar/{{$cli->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/clientes/apagar/{{$cli->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        <a href="/clientes/gerarPDF/{{$cli->id}}" class="btn btn-sm btn-info" target="_blank">PDF</a>
                    </td>
                </tr>
    @endforeach   
            </tbody>
        </table>
        {{ $clis->links() }}
@endif
    </div>
    <div class="card-footer">
        <a href="/clientes/novo" class="btn btn-sm btn-primary" role="button">Novo Cliente</a>
@if(count($clis) > 0)
        <a href="/clientes/gerarPDF" class="btn btn-sm btn-info" role="button" target="_blank">Gerar PDF</a>
@endif
    </div>
</div>

@endsection