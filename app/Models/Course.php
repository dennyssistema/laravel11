<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\Contracts\Auditable;
use \OwenIt\Auditing\Auditable as Auditoria;

class Course extends Model implements Auditable
{
    use HasFactory, Auditoria;

    // Indicar o nome da tabela;
    protected $table = 'courses';

    //Indicar colulas para cadastrado
    protected $fillable = ['name', 'price'];

    public function classe()
    {
        //Relacionamento um para muitos
        return $this->hasMany(Classe::class);
    }

}
