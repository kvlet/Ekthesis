<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proiparxousa extends Model
{
    protected $table = 'db_proiparx';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_parts';
    public $incrementing = false;
    public $fillable = [
        'value' ,
        'quan',
        'fpa_job',
        'sint_fpa_job'
    ];
}
