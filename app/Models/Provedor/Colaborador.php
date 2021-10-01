<?php
namespace App\Models\Provedor;


use App\Models\Authenticable;

use App\Repository\Provedor\ColaboradorSetorRepository;
use App\Repository\Provedor\SetorRepository;


class Colaborador extends Authenticable
{
   protected $table = 'colaboradores';



   public function setor($asObject = true)
   {
      $setor = SetorRepository::findById($this->provedor, $this->setor);

      if ($asObject) {
         $this->setor = $setor;
         return $this;
      }

      return $setor;
   }



   public function setores($asObject = true)
   {
      $setores = [];
      $colabSetores = ColaboradorSetorRepository::fetchByColaborador($this->provedor, $this->id);

      foreach ($colabSetores as $colabSetor) {
         $setores[] = SetorRepository::findById($this->provedor, $colabSetor['setor']);
      }

      if ($asObject) {
         $this->setores = $setores;
         return $this;
      }

      return $setores;
   }
}
