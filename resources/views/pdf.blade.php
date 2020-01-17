<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">

    <title>PDF</title>
</head>
<body>

<div class="card border">
    <div class="card-body">
        <center><h1>Lista de Contatos PDF</h1></center>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf</th>
                    <th scope"col">Nascimento</th>
                    <th scope"col">Telefone</th>
                    <th scope"col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contatos as $c)
                <tr>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->cpf }}</td>
                    <td>{{ $c->data_nascimento}}</td>
                    <td>{{ $c->telefone }}</td>
                    <td>{{ $c->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
