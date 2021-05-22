<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimologioCompany extends Model
{
    protected $table = 'db_timologio_etaireias';
    public $timestamps = false;
    protected $primaryKey = 'id_timologio';
}
