<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    protected $table = 'db_car_type';

    protected $guarded = ['id_car_type'];
    public $timestamps = false;
    protected $primaryKey= 'id_car_type';

    //edo na balo kai tin sisxetisi me ta oximata
}
