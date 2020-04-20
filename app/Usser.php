<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usser extends Model
{
    protected $table = 'user';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
    ];

    public function Reserva(){
        return $this->hasMany('App\Reserva');
    }
}