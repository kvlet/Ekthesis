<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvolvCar extends Model
{
    protected $table = 'db_involv_cars';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_oxima';
    public $incrementing = false;
    public $fillable = [
        'xiliometra' ,
        'value_car',
        'driver',
        'note'
    ];
}
