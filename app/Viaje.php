<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $table="viajes";
    public $timestamps=false;
    protected $fillable=[ 'imei',     
						  'destino'  ,
						  'medio'     ,
						  'proposito' ,
						  'costo'     ,
						  'personas'];


  


}
