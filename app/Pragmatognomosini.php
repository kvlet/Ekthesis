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

    protected $with = [
        'oxima_pathon',
        'pragmatognomonas'
    ];

    public function pragm_path(){
        if ($this->id_oximatos_pathon !== 1){
            $pinakida = $this->oxima_pathon->Ar_kyklo;
        }
        if ($this->Object == null){
            return 'oximata/'. $pinakida .'/'. $this->id_ekthesis;
        }else{
            return 'oximata/'.'object'.'/'. $this->id_ekthesis;
        }
    }

    public function getRouteKey(){
        return 'id_ekthesis';
    }


    public function pragmatognomonas()
    {
        return $this->hasOne(User::class,'id','id');
    }


    public function grafeio()
    {
        return $this->hasOne(Grafeio::class,'id_grafeio','id_grafeio');
    }

    public function nomoi()
    {
        return $this->hasOne(Nomos::class,'id_nomoi','id_nomoi');
    }

    public function diakrisi()
    {
        return $this->hasOne(Diakrisi::class,'id_diakrisi','id_diakrisi');
    }

    public function arxi_ekdosis_eggrafon(){
        return $this->hasOne(Arxi_ekdosis_eggrafon::class,'id_Arxi_ekdosis_eggrafon','id_arxi_ekdosis_eggrafon');
    }

    public function accident_place(){
        return $this->hasOne(Accedent_place::class,'id_accident_place','id_accedent_place');
    }

    public function company_ypaitiou(){
        return $this->hasOne(Company::class,'id_company_ypaitiou','id_company_ypaitiou');
    }
    public function company_pathon_real(){
        return $this->hasOne(Company::class,'id_company_pathon_real','id_company_pathon_real');
    }
    public function company_pathon(){
        return $this->hasOne(Company::class,'id_company','id_company_pathon');
    }

    public function pathon(){
        return $this->hasOne(Person::class,'id_person','id_pathon');
    }

    public function ypaitios(){
        return $this->hasOne(Person::class,'id_person','id_ypaitiou');
    }

    public function oxima_pathon(){
        return $this->hasOne(Oxima::class,'id_oximata', 'id_oximatos_pathon');
    }

    public function oxima_ypatiou(){
        return $this->hasOne(Oxima::class,'id_oximata','id_oximatos_ypaitiou');
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

    public function parts_of_ergasies(){
        return $this->belongsToMany('App\Ergasies','db_details_ekthesis','id_ekthesis','id_ergasies')->withPivot('id_parts','Cost_part','Cost_job','Type','quan','fpa_part','fpa_job','diax_fr_b','prod_code','sint_fpa_part','sint_fpa_job');
    }

    public function proiparxouses(){
        return $this->belongsToMany('App\Parts','db_proiparx','id_ekthesis','id_parts')->withPivot('id_categ','diax_fr_b','value','quan','fpa_job','sint_fpa_job');
    }

    public function status_of_ekth(){
        return $this->belongsToMany('App\Status','db_status_ekthesis','id_ekthesis','id_status')->withPivot('Status_date','Valid','Process_date','Notes');
    }

    public function invol_cars(){
        return $this->belongsToMany('App\Oxima','db_involv_cars','id_ekthesis','id_oxima')->withPivot('id_person','id_company','xiliometra','value_car','driver','note');
    }

    public function expen_ekth(){
        return $this->belongsToMany('App\Expense','db_expen_ekthesis','id_ekthesis','id_expenses')->withPivot('Quan','Value','Value_fpa');
    }

    public function expen_ekth_partner(){
        return $this->belongsToMany('App\Expense','db_expen_ekthesis_partner','id_ekthesis','id_expenses')->withPivot('id_users','quan','value','value_fpa');
    }
}
