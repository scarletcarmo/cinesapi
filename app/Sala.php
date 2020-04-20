<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'sala';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'cine_id',
    ];

    public function Cine(){
        return $this->belongsTo('App\Cine');
    }

    public function Asiento(){
        return $this->hasMany('App\Cine');
    }   
}