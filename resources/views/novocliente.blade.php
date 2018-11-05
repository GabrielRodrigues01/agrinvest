@extends('layout.app', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <input type="radio" name="tipo_cpf_cnpj" id="tipo_cpf" value="tipo_cpf "
                            onClick="habilitacao()"><label for="cpfCliente" style="margin-left: 5px;">Pessoa Física</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <input type="radio" name="tipo_cpf_cnpj" id="tipo_cnpj" value="tipo_cnpj" 
                        onClick="habilitacao()"><label for="cpfCliente" style="margin-left: 5px;">Pessoa Jurídica</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="cpfCliente">CPF</label>
                        <input type="text" class="form-control {{ $errors->has('cpfCliente') ? 'is-invalid' : '' }}" 
                        name="cpfCliente" id="cpfCliente" placeholder="000.000.000-00" disabled>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="cnpjCliente">CNPJ</label>
                        <input type="text" class="form-control {{ $errors->has('cnpjCliente') ? 'is-invalid' : '' }}" 
                        name="cnpjCliente" id="cnpjCliente" placeholder="00.000.000/0000-00" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nomeCliente">Nome</label>
                        <input type="text" class="form-control {{ $errors->has('nomeCliente') ? 'is-invalid' : '' }}" 
                        name="nomeCliente" id="nomeCliente" placeholder="Nome" disabled >
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
                        <input type="text" class="form-control {{ $errors->has('logradouroCliente') ? 'is-invalid' : '' }}" 
                        name="logradouroCliente" id="logradouroCliente" placeholder="Logradouro" disabled >
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
                        <input type="text" class="form-control {{ $errors->has('numeroCliente') ? 'is-invalid' : '' }}" 
                        name="numeroCliente" id="numeroCliente" placeholder="Número" disabled>
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
                        <input type="text" class="form-control {{ $errors->has('cepCliente') ? 'is-invalid' : '' }}" 
                        name="cepCliente" id="cepCliente" placeholder="00000-000" disabled >
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
                        <input type="text" class="form-control {{ $errors->has('bairroCliente') ? 'is-invalid' : '' }}" 
                        name="bairroCliente" id="bairroCliente" placeholder="Bairro" disabled >
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
                        <input type="text" class="form-control {{ $errors->has('telefoneCliente') ? 'is-invalid' : '' }}" 
                        name="telefoneCliente" id="telefoneCliente" placeholder="(00) 00000-0000" disabled >
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
                        <input type="text" class="form-control {{ $errors->has('emailCliente') ? 'is-invalid' : '' }}" 
                        name="emailCliente" id="emailCliente" placeholder="E-mail" disabled >
@if($errors->has('emailCliente'))
                        <div class="invalid-feedback">
    {{$errors->first('emailCliente')}}  
                        </div>
@endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a class="btn btn-danger btn-sm" href="/clientes" role="button">Cancelar</a>
        </form>
    </div>
</div>

@endsection