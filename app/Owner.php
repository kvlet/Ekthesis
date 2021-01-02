<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'db_owners';

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'Own_name';
    public $incrementing = false;
    protected $keyType = 'string';
}
