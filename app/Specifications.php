<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    protected $table = 'db_specifications';
    protected $primaryKey = 'id_oximata';
    public $incrementing = false;
    public $timestamps = false;
}
