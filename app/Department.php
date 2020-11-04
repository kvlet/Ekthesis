<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'db_department';

    protected $guarded = ['id_department'];

    public $timestamps = false;
    protected $primaryKey= 'id_department';
}
