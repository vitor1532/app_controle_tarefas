<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>

            .page-break {
                page-break-after: always;
            }

            .titulo {
                border:1px;
                text-align:center;
                width:100%;
                text-transform:uppercase;
                font-weight:bold;
                margin-bottom:25px;
            }

            .table {
                width: 100%;
                border-collapse: collapse;
            }

            table td, table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            table tr:nth-child(even){
                background-color: #f2f2f2;
            }

            table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #2c2a2a;
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="titulo">Lista de Tarefas</div>

        <table class="table table-striped" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Data limite</th>
            </tr>
            </thead>

            <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</th>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </body>

</html>
