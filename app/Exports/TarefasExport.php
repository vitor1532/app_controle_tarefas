<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarefasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tarefa::where('user_id', '=', auth()->user()->id)->get();
    }

    public function headings() :array
    {
        return ['ID Tarefa', 'ID Usuário', 'Tarefa', 'Data limite conclusão', 'Data criação', 'Data atualização'];
    }
}
