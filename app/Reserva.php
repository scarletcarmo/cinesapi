<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reserva';
    public $timestamps = false;
    protected $fillable = [
        'horario_id',
        'user_id',
    ];

    public function Usser(){
        return $this->belongsTo('App\Usser');
    }

    public function Horario(){
        return $this->belongsTo('App\Horario');
    }

    public function AsientoReserva(){
        return $this->belongsTo('App\AsientoReserva');
    }
}