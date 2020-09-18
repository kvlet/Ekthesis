<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xromata extends Model
{
    protected $table = 'db_xromata';

    protected $guarded = ['id_xromata'];
    public $timestamps = false;
    protected $primaryKey= 'id_xromata';

    //edo na balo kai tin sisxetisi me ta oximata
}
