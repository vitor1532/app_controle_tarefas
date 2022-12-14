@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="display: inline-flex">
                        <div class="mr-auto">Adicionar Tarefa</div>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Voltar</a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('tarefa.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tarefa</label>
                                <input type="text" class="form-control" name="tarefa" value="{{ old('tarefa') ?? '' }}">
                                <div style="color: red;">{{ $errors->has('tarefa') ? $errors->first('tarefa') : '' }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Data limite</label>
                                <input type="date" class="form-control" name="data_limite_conclusao" value="{{ old('data_limite_conclusao') ?? '' }}">
                                <div style="color: red;">{{ $errors->has('data_limite_conclusao') ? $errors->first('data_limite_conclusao') : '' }}</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
