<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomoi extends Model
{
    protected $table = 'db_nomoi';

    protected $guarded = ['id_nomoi'];

    protected $primaryKey= 'id_nomoi';
}
