<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oximata extends Model
{
    protected $table = 'db_oximata';

    protected $guarded = ['id_oximata'];
    public $timestamps = false;
    protected $primaryKey= 'id_oximata';

    public function markes(){
        return $this->hasOne(Markes::class,'id_markes' );
    }

    public function xrisi(){
        return $this->hasOne(Xrisi::class,'id_xrisi' );
    }

    public function xromata(){
        return $this->hasOne(Xromata::class,'id_xromata' );
    }

    public function car_type(){
        return $this->hasOne(CarType::class,'id_car_type' );
    }

    public function paint(){
        return $this->hasOne(Paint::class,'id_paint_type' );
    }
}
