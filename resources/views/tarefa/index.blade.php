@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @isset($_GET['msg'])
                    <div class="text-danger text-center">{{$_GET['msg']}}</div>
                @endisset
                <div class="card">
                    <div class="card-header" style="display: inline-flex">
                        <div class="mr-auto">Tarefas</div>
                        <a href="{{ route('tarefa.create') }}" class="btn btn-sm btn-primary">Nova Tarefa</a>
                        <a href="{{ route('tarefa.export', ['extension' => 'xlsx']) }}" class="btn btn-sm btn-outline-success ml-2">XLSX</a>
                        <a href="{{ route('tarefa.export', ['extension' => 'csv']) }}" class="btn btn-sm btn-outline-success ml-2">CSV</a>
                        <a href="{{ route('tarefa.exportDOM') }}" class="btn btn-sm btn-outline-success ml-2" target="_blank">PDF</a> <!-- DOMPDF -->

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tarefa</th>
                                    <th scope="col">Data Limite Conclusão</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tarefas as $tarefa)
                                    <tr>
                                        <th scope="row">{{ $tarefa->id }}</th>
                                        <td>{{ $tarefa->tarefa }}</td>
                                        <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                                        <td><a href="{{ route('tarefa.edit', $tarefa->id) }}" class="btn btn-sm btn-outline-primary">Editar</a></td>
                                        <td>
                                            <form id="form_{{$tarefa->id}}" method="POST" action="{{route('tarefa.destroy', ['tarefa' => $tarefa->id])}}" >
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                            </form>
                                            {{--<a href="" onclick="document.getElementById('form_{{$tarefa->id}}').submit()">Excluir</a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>

                                @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                                    <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : ''}}">
                                        <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>
                            </ul>

                            Exibindo {{ $tarefas->count() }} de {{ $tarefas->total() }}

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
