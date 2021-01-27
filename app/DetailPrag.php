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
    public $fillable = [
      'Cost_part' ,
       'Cost_job',
       'Type' ,
       'quan',
       'fpa_part',
       'fpa_job',
       'diax_fr_b',
       'prod_code'
    ];
    protected $attributes=[
        'sint_fpa_job' => '24.00',
        'sint_fpa_part' => '24.00',
        'quan' => '1',
    ];
}
