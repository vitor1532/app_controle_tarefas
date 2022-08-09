@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link verificação foi mandado para seu E-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor cheque seu e-mail por um link de verificação.') }}
                    {{ __('Se você não recebeu o e-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para pedir outro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
