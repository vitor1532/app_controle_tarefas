@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Acesso Negado</div>

                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            Desculpe, você não tem acesso a esse recurso. <a href="{{ route('tarefa.index') }}">Clique aqui</a> para voltar à pagina principal.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
