<?php
namespace App\Models\Provedor;


use Illuminate\Database\Eloquent\Factories\HasFactory;


class Fornecedor extends Empresa
{
    use HasFactory;


    protected $table = "fornecedores";
}
