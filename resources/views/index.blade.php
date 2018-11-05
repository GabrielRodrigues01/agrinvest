@extends('layout.app', ["current"=>"home"])

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="cardy-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card-text">
                        Aqui você irá cadastrar todos os seus Clientes.
                    </p>
                    <a href="/clientes" class="btn btn-primary">Cadastre seus clientes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection