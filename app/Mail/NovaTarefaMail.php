<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Tarefa;
use App\Models\User;


class NovaTarefaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $tarefa;
    public $user;
    public $data_limite_conclusao;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Tarefa $tarefa, $user)
    {
        $this->tarefa = $tarefa;
        $this->user = $user;
        $this->data_limite_conclusao = date('d/m/Y', strtotime($tarefa->data_limite_conclusao));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $tarefa = $this->tarefa;
        return $this->markdown('emails.nova-tarefa', ['tarefa' => $tarefa, 'user' => $user]);
    }
}
