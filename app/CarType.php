<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    protected $table = 'db_car_type';

    protected $guarded = ['id_car_type'];
    public $timestamps = false;
    protected $primaryKey= 'id_car_type';

    public function oximata(){
        return $this->belongsToMany(Oxima::class,'db_oximata','id_oximata');
    }
}
