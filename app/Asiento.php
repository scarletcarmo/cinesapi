<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    protected $table = 'asiento';
    public $timestamps = false;
    protected $fillable = [
        'fila',
        'numero',
        'sala_id',
    ];

    public function Sala(){
        return $this->belongsTo('App\Sala');
    }
    public function Reserva(){
        return $this->belongsTo('App\Sala');
    }

    public function AsientoReserva(){
        return $this->hasMany('App\AsientoReserva');
    }
    
}