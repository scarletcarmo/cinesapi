<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cine extends Model
{
    protected $table = 'cine';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'direccion',
    ];

    public function Sala(){
        return $this->hasMany('App\Sala');
    }

    public function Reserva(){
        return $this->hasManyThrough('App\Reserva', 'App\Horario', 'App\Pelicula');
    }
}