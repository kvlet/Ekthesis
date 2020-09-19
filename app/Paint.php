<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paint extends Model
{
    protected $table = 'db_paint';

    protected $guarded = ['id_paint_type'];
    public $timestamps = false;
    protected $primaryKey= 'id_paint_type';

    //edo na balo kai tin sisxetisi me ta oximata
}
