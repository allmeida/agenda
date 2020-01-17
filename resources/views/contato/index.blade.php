@extends('layouts.master', ["current" => "index"])

@section('titulo','Contato')

@section('conteudo')
<div class="card border">
    <div class="card-body">
        <center><h1 class="card-title">Lista de Contatos</h1></center>

@push('js')
    <script>
        function excluirContato(id) {
            bootbox.confirm("Deseja mesmo excluir esse contato?", function(sim) {
                if (sim) {
                    //bootbox.alert("Deve excluir o contato com ID: " + id);
                    axios.delete('/contatos/' + id)
                        .then(function (resposta) {
                            window.location.href = "/contatos";
                        })
                        .catch(function (erro) {
                            bootbox.alert("Ocorreu um erro: " + erro);
                        })
                }
            });
        }
    </script>
@endpush



<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cpf</th>
            <th scope"col">Data de Nascimento</th>
            <th scope"col">Telefone</th>
            <th scope"col">E-mail</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contatos as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nome }}</td>
            <td>{{ $c->cpf }}</td>
            <td>{{ $c->data_nascimento}}</td>
            <td>{{ $c->telefone }}</td>
            <td>{{ $c->email }}</td>
            <td>
                <a class="btn btn-primary" href="/contatos/edit/{{$c->id}}">Editar</a>
                <a class="btn btn-danger" href="javascript:excluirContato({{ $c->id }})">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>

@endsection
