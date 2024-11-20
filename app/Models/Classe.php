<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\Contracts\Auditable;
use \OwenIt\Auditing\Auditable as Auditoria;

class Classe extends Model implements Auditable
{
    use HasFactory , Auditoria;

    // Indicar o nome da tabela;
    protected $table = 'classes';

    //Indicar colulas para cadastrado
    protected $fillable = ['name', 'description', 'order_classe', 'course_id'];

    public function course()
    {
        //Filho pode acessar o pai
        return $this->belongsTo(Course::class);
    }

}
