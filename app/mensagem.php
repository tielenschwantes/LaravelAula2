<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Atividade;

class mensagem extends Model
{
    protected $table = 'mensagens';

    public function atividade(){
    	return $this->belongsTo(Atividade::class);
    }
}
