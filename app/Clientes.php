<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $table = 'clientes';
    public $timestamps = false;

    public function getClientes(){

    }
    
}