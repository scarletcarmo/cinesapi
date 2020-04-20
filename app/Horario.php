<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horario';
    public $timestamps = false;
    protected $fillable = [
        'fecha',
        'hora',
        'pelicula_id',
    ];

    public function Pelicula(){
        return $this->belongsTo('App\Pelicula');
    } 

    public function Reserva(){
        return $this->hasMany('App\Reserva');
    }
}