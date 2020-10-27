<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pragmatognomosini extends Model
{
    protected $table = 'db_ekthesis';

    protected $guarded = [
        'id_ekthesis',
        'File_position',
        'Ekkatharistike',
        'Ar_timologio_partner',
        'id_timologio_etaireias'
    ];

    protected $primaryKey= 'id_ekthesis';

    protected $attributes=[
        'Fpa' => '24.0',
        'Ekpt_parts' => '0.0',
        'Ekpt_jobs' => '0.0',
        'Amibi_partner'=>'0.0',
        'partially_lock'=>'Όχι',
        'total_lock'=>'Όχι',
        'File_position'=> null
    ];

    protected $casts = [
        'Fpa' => 'real',
        'Ekpt_parts' => 'float',
        'Ekpt_jobs' => 'float',
        'value_car_pathon'=>'float',
        'Amibi_partner'=>'float'
    ];


    public function pragmatognomonas()
    {
        return $this->hasOne(User::class,'id');
    }


    public function grafeio()
    {
        return $this->hasOne(Grafeio::class,'id_grafeio');
    }

    public function nomoi()
    {
        return $this->hasOne(Nomos::class,'id_nomoi');
    }

    public function diakrisi()
    {
        return $this->hasOne(Diakrisi::class,'id_diakrisi');
    }

    public function arxi_ekdosis_eggrafon(){
        return $this->hasOne(Arxi_ekdosis_eggrafon::class,'id_Arxi_ekdosis_eggrafon');
    }

    public function accident_place(){
        return $this->hasOne(Accedent_place::class,'id_accident_place');
    }

    public function company_ypaitiou(){
        return $this->hasOne(Company::class,'id_company_ypaitiou');
    }
    public function company_pathon_real(){
        return $this->hasOne(Company::class,'id_company_pathon_real');
    }
    public function company_pathon(){
        return $this->hasOne(Company::class,'id_company');
    }

    public function pathon(){
        return $this->hasOne(Person::class,'id_person');
    }

    public function ypaitios(){
        return $this->hasOne(Person::class,'id_person');
    }

    public function oxima_pathon(){
        return $this->hasOne(Oxima::class,'id_oximata');
    }

    public function oxima_ypatiou(){
        return $this->hasOne(Oxima::class,'id_oximata');
    }

    public function keimena(){
        return $this->belongsToMany('App\Keimena','db_keimena_ekthesis','id_ekthesis','id_keimena')->withPivot('Note','Print','print_group');
    }
    public  function praktoreia(){
        return $this->belongsToMany('App\Praktoreio','db_praktoreio_ekthesis','id_ekthesis','id_praktoreio')->withPivot('note');
    }

    public function synergeia(){

        return $this->belongsToMany('App\Synergeio','db_synergeia_ekthesis','id_ekthesis','id_synergeia')->withPivot('Date_episkepsis','Date_episkepsis2','Date_episkepsis3','Note');
    }


}
