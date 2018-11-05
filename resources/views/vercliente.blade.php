@extends('layout.app', ["current" => "clientes"])

@section('body')
<div class="card border">
    <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="cpfCliente">CPF</label>
                        <input type="text" class="form-control" name="cpfCliente" 
                        value="{{$cli->cpf}}" id="cpfCliente" readonly="readonly">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="cnpjCliente">CNPJ</label>
                        <input type="text" class="form-control" name="cnpjCliente" 
                        value="{{$cli->cnpj}}" id="cnpjCliente" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nomeCliente">Nome</label>
                        <input type="text" class="form-control" name="nomeCliente" 
                        value="{{$cli->nome}}" id="nomeCliente" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="logradouroCliente">Logradouro</label>
                        <input type="text" class="form-control" name="logradouroCliente" 
                        value="{{$cli->logradouro}}" id="logradouroCliente" readonly="readonly">

                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="numeroCliente">Número</label>
                        <input type="text" class="form-control" name="numeroCliente" 
                        value="{{$cli->numero}}" id="numeroCliente" readonly="readonly"> 
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="cepCliente">CEP</label>
                        <input type="text" class="form-control" name="cepCliente" 
                        value="{{$cli->cep}}" id="cepCliente" readonly="readonly">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="bairroCliente">Bairro</label>
                        <input type="text" class="form-control" name="bairroCliente" 
                        value="{{$cli->bairro}}" id="bairroCliente" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="telefoneCliente">Telefone</label>
                        <input type="text" class="form-control" name="telefoneCliente" 
                        value="{{$cli->telefone}}" id="telefoneCliente" readonly="readonly">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="emailCliente">E-mail</label>
                        <input type="text" class="form-control" name="emailCliente" 
                        value="{{$cli->email}}" id="emailCliente" readonly="readonly">
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-sm" href="/clientes" role="button">Voltar</a>
    </div>
</div>
@endsection