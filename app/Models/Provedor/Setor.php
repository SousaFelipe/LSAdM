<?php
namespace App\Models\Provedor;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Repository\Provedor\SubSetorRepository;


class Setor extends Model
{
    use HasFactory;



    protected $table = 'setores';



    public function subSetores($asObject = false)
    {
        $subsetores = SubSetorRepository::findBySetor($this->provedor, $this->id);
        
        if ($asObject) {
            $this->subsetores = $subsetores;
            return $this->subsetores;
        }

        return $subsetores;
    }
}
