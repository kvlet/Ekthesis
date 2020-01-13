<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oxima extends Model
{
    protected $table = 'db_oximata';

    protected $guarded = ['id_oximata','Flag'];

    protected $primaryKey= 'id_oximata';}
