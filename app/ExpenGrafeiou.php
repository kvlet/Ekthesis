<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenGrafeiou extends Model
{
    protected $table = 'db_expen_grafeiou';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_expenses';
    public $incrementing = false;
    public $fillable = [
        'Value_expen' ,
        'Note',
        'Valid',
        'Flag'
    ];
}
