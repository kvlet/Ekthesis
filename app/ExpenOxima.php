<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenOxima extends Model
{
    protected $table = 'db_expen_oxima';

    protected $guarded = ['id_expen_oxima'];

    public $timestamps = false;
    protected $primaryKey= 'id_expen_oxima';
}
