<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    protected $table = 'cliente';
    protected $primaryKey = 'Id';

    // public function getPrecoFormatado($prefixo = '') {
    //     $preco = number_format($this->preco, '2', ',', ' ');
    //     $preco = $prefixo.' '.$preco;
    //     return $preco;
    // }
}
