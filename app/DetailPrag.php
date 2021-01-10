<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPrag extends Model
{
    protected $table = 'db_details_ekthesis';

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_ergasies';
    public $incrementing = false;

}
