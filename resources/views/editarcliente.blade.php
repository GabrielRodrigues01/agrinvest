@extends('layout.app', ["current" => "clientes"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/clientes/{{$cli->id}}" method="POST">
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
                        <input type="text" class="form-control {{ $errors->has('nomeCliente') ? 'is-invalid' : '' }}" name="nomeCliente" 
                        value="{{$cli->nome}}" id="nomeCliente">
@if($errors->has('nomeCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('nomeCliente')}}  
                        </div>
@endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="logradouroCliente">Logradouro</label>
                        <input type="text" class="form-control {{ $errors->has('logradouroCliente') ? 'is-invalid' : '' }}" name="logradouroCliente" 
                        value="{{$cli->logradouro}}" id="logradouroCliente">
@if($errors->has('logradouroCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('logradouroCliente')}}  
                        </div>
@endif
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="numeroCliente">Número</label>
                        <input type="text" class="form-control {{ $errors->has('numeroCliente') ? 'is-invalid' : '' }}" name="numeroCliente" 
                        value="{{$cli->numero}}" id="numeroCliente">
@if($errors->has('numeroCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('numeroCliente')}}  
                        </div>
@endif 
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="cepCliente">CEP</label>
                        <input type="text" class="form-control {{ $errors->has('cepCliente') ? 'is-invalid' : '' }}" name="cepCliente" 
                        value="{{$cli->cep}}" id="cepCliente">
@if($errors->has('cepCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('cepCliente')}}  
                        </div>
@endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="bairroCliente">Bairro</label>
                        <input type="text" class="form-control {{ $errors->has('bairroCliente') ? 'is-invalid' : '' }}" name="bairroCliente" 
                        value="{{$cli->bairro}}" id="bairroCliente">
@if($errors->has('bairroCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('bairroCliente')}}  
                        </div>
@endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="telefoneCliente">Telefone</label>
                        <input type="text" class="form-control {{ $errors->has('telefoneCliente') ? 'is-invalid' : '' }}" name="telefoneCliente" 
                        value="{{$cli->telefone}}" id="telefoneCliente">
@if($errors->has('telefoneCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('telefoneCliente')}}  
                        </div>
@endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="emailCliente">E-mail</label>
                        <input type="text" class="form-control {{ $errors->has('emailCliente') ? 'is-invalid' : '' }}" name="emailCliente" 
                        value="{{$cli->email}}" id="emailCliente">
@if($errors->has('emailCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('emailCliente')}}  
                        </div>
@endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection