<?php
namespace App\Models\Provedor;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ColaboradorSetor extends Model
{
    use HasFactory;


    
    protected $table = 'colaborador_setores';



    public function setor()
    {
        return $this->hasOne(Setor::class);
    }
}
