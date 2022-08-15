<?php

namespace App\Http\Controllers;

use App\Mail\NovaTarefaMail;
use App\Models\Tarefa;
use Mail;
use Illuminate\Http\Request;

class TarefaController extends Controller
{

    public $destinatario;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::where('user_id', '=', auth()->user()->id)->paginate(10);

        //dd($tarefas);

        return view('tarefa.index', ['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //regras de validação
        $regras = [
            'tarefa' => 'required',
            'data_limite_conclusao' => 'required'
        ];

        $feedback = [
            'required' => 'Este campo é obrigatório'
        ];

        $request->validate($regras, $feedback);

        $dados = $request->all('tarefa', 'data_limite_conclusao', 'user_id');
        $dados['user_id'] = auth()->user()->id;

        $tarefa = Tarefa::create($dados);

        $destinatario = auth()->user()->email;
        $user = auth()->user();
        Mail::to($destinatario)->send(new NovaTarefaMail($tarefa, $user));

        return redirect()->route('tarefa.show', ['tarefa' => $tarefa->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        return view('tarefa.show', ['tarefa' => $tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
