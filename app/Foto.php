<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'db_foto_ekth';
    public $timestamps = false;
    protected $primaryKey= 'id_foto';
}
