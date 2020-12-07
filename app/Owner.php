<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'db_owners';

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_oximata,Own_name,Transfer_date';
    public $incrementing = false;
}
