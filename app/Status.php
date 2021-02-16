<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table='db_status';
    protected $guarded='id_status';
    public $timestamps = false;
    protected $primaryKey = 'id_status';
}
