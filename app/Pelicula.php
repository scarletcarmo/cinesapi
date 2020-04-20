<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'pelicula';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'duracion',
        'sinopsis',
        'categoria',
        'cine_id',
    ];

    public function Cine(){
        return $this->belongsTo('App\Cine');
    }

    public function Horario(){
        return $this->hasMany('App\Horario');
    }

    public function Reserva(){
        return $this->hasManyThrough('App\Reserva', 'App\Horario');
    }
}