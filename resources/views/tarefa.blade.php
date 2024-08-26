<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        
        table {
            width: 70%;
            border-collapse:separate;
            border-spacing:1px;
            border-radius:6px;
            overflow:hidden;
            font-family:Arial;

        }
        table, th, td {
            border: 3px solid black;

        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #ffffff;
        }
    </style>
</head>
<body>  
    <h1>Lista de Tarefas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data de publicação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->titulo }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>{{ $tarefa->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
