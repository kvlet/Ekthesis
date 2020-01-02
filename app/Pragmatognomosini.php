<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pragmatognomosini extends Model
{
    protected $table = 'db_ekthesis';

    protected $fillable = [
        'date_atiximatos',
        'date_eksetasis',
        'date_dikasimou',
        'id_accedent_place',
        'id_ypaitiou',
        'id_oximatos_ypaitiou',
        'id_pathon',
        'id_oximatos_pathon',
        'xiliometra',
        'id_company_ypaitiou',
        'id_company_pathon',
        'id_company_pathon_real',
        'id_grafeio',
        'Valid',
        'Simpliromatiki',
        'File_position',
        'id_timologio_etaireias',
        'Entoleas',
        'Prot_bibliou',
        'Sap',
        'id_diakrisi',
        'Ekpt_parts',
        'Ekpt_jobs',
        'Date_paradosis',
        'Object',
        'id',
        'id_arxi_ekdosis_eggrafon',
        'Fpa',
        'partially_lock',
        'total_lock',
        'Ar_timologio_partner',
        'Notes',
        'Ekkatharistike',
        'id_nomoi',
        'Driver_ypaitiou',
        'value_car_pathon',
        'billing_notes',
        'driver_pathon',
        'Flag',
        'to_pay',
    ];
}
