<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use PDF;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clis = Cliente::paginate(5);
        return view('clientes', compact('clis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nomeCliente'=>'required|min:3|max:50',
            'logradouroCliente'=>'required',
            'bairroCliente'=>'required',
            'numeroCliente'=>'required',
            'cepCliente'=>'required',
            'telefoneCliente'=>'required',
            'emailCliente'=> 'required|email'
        ];
        $mensagens = [
            'required'=>'O campo :attribute não pode estar em branco',
            'nomeCliente.min'=>'É necessário no mínimo 3 caracteres no campo NOME',
            'nomeCliente.max'=>'É necessário no máximo 50 caracteres no campo NOME',
            'nomeCliente.unique'=>'É nome já foi salvo no banco de dados',
            'cpfCliente.unique'=>'CPF já cadastrado',
            'cnpjCliente.unique'=>'CNPJ já cadastrado',
            'emailCliente.email'=>'O e-mail não é valido'                        
        ];
        $request->validate($regras, $mensagens);

        $cli = new Cliente();
        $cli->nome = $request->input('nomeCliente');
        $cli->cpf = $request->input('cpfCliente');
        $cli->cnpj = $request->input('cnpjCliente');
        $cli->logradouro = $request->input('logradouroCliente');
        $cli->bairro = $request->input('bairroCliente');
        $cli->numero = $request->input('numeroCliente');
        $cli->cep = $request->input('cepCliente');
        $cli->telefone = $request->input('telefoneCliente');
        $cli->email = $request->input('emailCliente');
        $cli->save();
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cli = Cliente::find($id);
        if(isset($cli)){
            return view('vercliente', compact('cli'));
        }
        return redirect('/clientes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cli = Cliente::find($id);
        if(isset($cli)){
            return view('editarcliente', compact('cli'));
        }
        return redirect('/clientes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regras = [
            'nomeCliente'=>'required|min:3|max:50',
            'logradouroCliente'=>'required',
            'bairroCliente'=>'required',
            'numeroCliente'=>'required',
            'cepCliente'=>'required',
            'telefoneCliente'=>'required',
            'emailCliente'=> 'required|email'
        ];
        $mensagens = [
            'required'=>'O campo :attribute não pode estar em branco',
            'nomeCliente.min'=>'É necessário no mínimo 3 caracteres no campo NOME',
            'nomeCliente.max'=>'É necessário no máximo 50 caracteres no campo NOME',
            'nomeCliente.unique'=>'É nome já foi salvo no banco de dados',
            'cpfCliente.unique'=>'CPF já cadastrado',
            'cnpjCliente.unique'=>'CNPJ já cadastrado',
            'emailCliente.email'=>'O e-mail não é valido'                        
        ];
        $request->validate($regras, $mensagens);



        $cli = Cliente::find($id);
        if(isset($cli)){
            $cli->nome = $request->input('nomeCliente');
            $cli->cpf = $request->input('cpfCliente');
            $cli->cnpj = $request->input('cnpjCliente');
            $cli->logradouro = $request->input('logradouroCliente');
            $cli->bairro = $request->input('bairroCliente');
            $cli->numero = $request->input('numeroCliente');
            $cli->cep = $request->input('cepCliente');
            $cli->telefone = $request->input('telefoneCliente');
            $cli->email = $request->input('emailCliente');
            $cli->save(); 
        }
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cli = Cliente::find($id);
        if(isset($cli)){
            $cli->delete();
        }
        return redirect('/clientes');
    }

    public function gerarPDF()
    {
        $clis = Cliente::all();
        $titulo = "<h1>Relatório de Clientes</h1><br>";
        PDF::SetTitle('Relatório de Clientes');
        PDF::AddPage();
        PDF::writeHTML($titulo, true, false, true, false, '');
        foreach($clis as $cli){
            $texto = "<p>Nome: ".$cli->nome."<br>";
            if(!empty($cli->cpf)){
                $texto .= "CPF: ".$cli->cpf."<br>";
            }else{
                $texto .= "CNPJ: ".$cli->cnpj."<br>";
            }
            $texto .= "Logradouro: ".$cli->logradouro."<br>Número: ".$cli->numero."<br>CEP: ".$cli->cep.
            "<br>Bairro: ".$cli->bairro."<br>Telefone: ".$cli->telefone."<br>E-mail: ".$cli->email."<br></p>";
            PDF::writeHTML($texto, true, false, true, false, '');
                     
        }
        PDF::Output('pdf_teste.pdf');
        PDF::reset();
    }

    public function pdf($id){
        $cli = Cliente::find($id);
        if(isset($cli)){
            $titulo = "<h1>Relatório de Cliente</h1><br>";
            PDF::SetTitle('Relatório de Cliente');
            PDF::AddPage();
            PDF::writeHTML($titulo, true, false, true, false, '');
        
            $texto = "<p>Nome: ".$cli->nome."<br>";
            if(!empty($cli->cpf)){
                $texto .= "CPF: ".$cli->cpf."<br>";
            }else{
                $texto .= "CNPJ: ".$cli->cnpj."<br>";
            }
            $texto .= "Logradouro: ".$cli->logradouro."<br>Número: ".$cli->numero."<br>CEP: ".$cli->cep.
            "<br>Bairro: ".$cli->bairro."<br>Telefone: ".$cli->telefone."<br>E-mail: ".$cli->email."<br></p>";
            PDF::writeHTML($texto, true, false, true, false, '');
                     
        
        PDF::Output('pdf_teste.pdf');
        PDF::reset();
            
        }

    }
}
