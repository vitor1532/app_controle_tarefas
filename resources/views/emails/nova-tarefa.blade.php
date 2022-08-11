@component('mail::message')

Olá, {{ $user->nome }}, você acaba de adicionar a tarefa "{{ $tarefa->tarefa }}" em sua lista.
A data limite de conclusão é {{ $data_limite_conclusao }}.

@component('mail::button', ['url' =>  route('tarefa.show', ['tarefa' => $tarefa->id])])
Veja sua nova tarefa!
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
