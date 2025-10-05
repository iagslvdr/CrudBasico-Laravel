<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $table = 'produto';
    protected $primaryKey = 'codigo';

    public function getPrecoFormatado($prefixo = '') {
        $preco = number_format($this->preco, '2', ',', ' ');
        $preco = $prefixo.' '.$preco;
        return $preco;
    }
}
