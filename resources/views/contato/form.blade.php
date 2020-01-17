@extends('layouts.master', ["current" => "form"])

@section('titulo','Cadastrar Contato')

@section('conteudo')
<div class="card border">
    <div class="card-body">
        <center><h1 class="card-title">Formulário</h1></center>

<form method='post'>
@csrf

@if(isset($contato))
    @method('PUT')
@endif
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{$contato->nome ?? null}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">CPF</label>
        <input type="text" class="form-control" name="cpf" value="{{$contato->cpf ?? null}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Data de Nascimento</label>
        <input type="date" class="form-control" name="data_nascimento" value="{{$contato->data_nascimento ?? null}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Telefone</label>
        <input type="text" class="form-control" name="telefone"value="{{$contato->telefone ?? null}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">E-mail</label>
        <input type="email" class="form-control" name="email"value="{{$contato->email ?? null}}">
    </div>

    <p>
    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@if(isset($contato))
<form action="/contatos/{{$contato->id}}" method= "POST">
@csrf
    @method ('DELETE')
    <button type="submit" class ="btn btn-danger">Excluir</button>

</form>
@endif
<div>
@endsection

