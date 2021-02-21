<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provlepseis extends Model
{
    protected $table = 'db_provlepseis_ekthesis';

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_provlepseis';
    public $incrementing = false;
    protected $keyType = 'string';
}
