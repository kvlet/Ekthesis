<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tameio extends Model
{
    protected $table='db_tameio';
    protected $guarded='id';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
