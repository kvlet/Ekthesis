<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'db_company';

    protected $guarded = ['id_company'];
    public $timestamps = false;
    protected $primaryKey= 'id_company';
}
