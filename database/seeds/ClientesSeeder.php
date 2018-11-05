<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert(['nome'=>'Antonio Leandro Souza', 'cpf'=>'286.819.093-63', 'cnpj'=>NULL, 'logradouro'=>'Praça Antonio Vitório de Sousa', 'bairro'=>'Centro', 'numero'=>'685', 'cep'=>'64360-970', 'telefone'=>'(86)98579-6024', 'email'=>'antonio@gmail.com']);
        DB::table('clientes')->insert(['nome'=>'Tânia Milena Nogueira', 'cpf'=>'004.461.527-22', 'cnpj'=>NULL, 'logradouro'=>'Rua Santa Cecília', 'bairro'=>'Parque Belém (Cunhambebe)', 'numero'=>'287', 'cep'=>'23935-055', 'telefone'=>'(24)99753-1746', 'email'=>'tania@gmail.com']);
        DB::table('clientes')->insert(['nome'=>'Murilo Informática Ltda', 'cpf'=>NULL, 'cnpj'=>'92.089.430/0001-40', 'logradouro'=>'Rua Idalina Salcedo de Paula', 'bairro'=>'Jardim Dona Elvira', 'numero'=>'768', 'cep'=>'06693-210', 'telefone'=>'(11)99687-5818', 'email'=>'fiscal@murilo.com.br']);
        DB::table('clientes')->insert(['nome'=>'Márcio Casa Noturna ME', 'cpf'=>NULL, 'cnpj'=>'91.548.231/0001-90', 'logradouro'=>'Rua 44 RF', 'bairro'=>'Residencial Florença', 'numero'=>'920', 'cep'=>'13506-313', 'telefone'=>'(19)99803-2965', 'email'=>'fiscal@marciocasanoturna.br']);
        DB::table('clientes')->insert(['nome'=>'Josefa Daniela Tatiane Peixoto', 'cpf'=>'035.200.354-56', 'cnpj'=>NULL, 'logradouro'=>'Rua Antônio Amâncio Pires', 'bairro'=>'Centro', 'numero'=>'486', 'cep'=>'58823-970', 'telefone'=>'(83)98208-2428', 'email'=>'josefa@gmail.com']);
        DB::table('clientes')->insert(['nome'=>'José Sebastião Moura', 'cpf'=>NULL, 'cnpj'=>'529.197.368-41', 'logradouro'=>'Rua Domingos Lazari', 'bairro'=>'Pimentéis', 'numero'=>'192', 'cep'=>'52919-736', 'telefone'=>'(19)99551-8861', 'email'=>'jose@gmail.com']);
        DB::table('clientes')->insert(['nome'=>'Alexandre Oliver Castro', 'cpf'=>NULL, 'cnpj'=>'520.409.254-49', 'logradouro'=>'Vila de Camburão', 'bairro'=>'Camburão', 'numero'=>'167', 'cep'=>'68200-972', 'telefone'=>'(93)98626-0094', 'email'=>'alexandre@gmail.com']);
    }
}