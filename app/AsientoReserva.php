<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsientoReserva extends Model
{
    protected $table = 'asiento_reserva';
    public $timestamps = false;
    protected $fillable = [
        'reserva_id',
        'asiento_id',
    ];

    public function Reserva(){
        return $this->belongsTo('App\Reserva');
    }

    public function Asiento(){
        return $this->belongsTo('App\Asiento');
    }
}