<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cadastro de Clientes</title>
    <style>
        body {
            padding: 20px;
        }
        .cardy-body{
            padding: 20px;
            text-align: center;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .jumbotron {
            display: flex;
            justify-content: center;
        }
    </style>
   
</head>
<body>
    <div class="container justify-content-center">
        @component('componente_navbar', ["current"=>$current])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
    
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jQuery-Mask-Plugin-master/dist/jquery.mask.js') }}"></script>
    <script>
        jQuery(function($){
          $("#cpfCliente").mask('000.000.000-00');
          $('#cnpjCliente').mask('00.000.000/0000-00');
          $('#cepCliente').mask('00000-000');
          $('#telefoneCliente').mask('(00)00000-0000');
        });
        function habilitacao(){
            if(document.getElementById('tipo_cpf').checked == true){
              document.getElementById('cpfCliente').disabled = false;
              document.getElementById('nomeCliente').disabled = false;
              document.getElementById('logradouroCliente').disabled = false;
              document.getElementById('numeroCliente').disabled = false;
              document.getElementById('cepCliente').disabled = false;
              document.getElementById('bairroCliente').disabled = false;
              document.getElementById('telefoneCliente').disabled = false;
              document.getElementById('emailCliente').disabled = false;
            }
              if(document.getElementById('tipo_cpf').checked == false){
              document.getElementById('cpfCliente').disabled = true;
              document.getElementById('cnpjCliente').disabled = false;
              document.getElementById('nomeCliente').disabled = false;
              document.getElementById('logradouroCliente').disabled = false;
              document.getElementById('numeroCliente').disabled = false;
              document.getElementById('cepCliente').disabled = false;
              document.getElementById('bairroCliente').disabled = false;
              document.getElementById('telefoneCliente').disabled = false;
              document.getElementById('emailCliente').disabled = false;
            }
        }
    </script>
</body>
</html>