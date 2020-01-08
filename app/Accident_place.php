<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accident_place extends Model
{
    protected $table = 'db_accident_place';

    protected $guarded = ['id_accident_place'];

    protected $primaryKey= 'id_accident_place';

}
