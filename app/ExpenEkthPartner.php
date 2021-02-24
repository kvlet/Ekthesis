<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenEkthPartner extends Model
{
    protected $table = 'db_expen_ekthesis_partner';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_expenses';
    public $incrementing = false;
    public $fillable = [
        'quan' ,
        'value',
        'value_fpa'
    ];
}
