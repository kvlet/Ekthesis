<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pragmatognomosini extends Model
{
    protected $table = 'db_ekthesis';
    protected $guarded = ['id_ekthesis', 'File_position'];
    protected $primaryKey= 'id_ekthesis';

    protected $attributes=[
        'Fpa' => '24.0',
        'Ekpt_parts' => '0.0',
        'Ekpt_jobs' => '0.0',
        'partially_lock'=>'Όχι',
        'total_lock'=>'Όχι'
    ];

    protected $casts = [
        'Fpa' => 'real',
        'Ekpt_parts' => 'float',
        'Ekpt_jobs' => 'float',
        'value_car_pathon'=>'float'
    ];


    public function pragmatognomonas()
    {
        return $this->hasOne(User::class);
    }


    public function grafeio()
    {
        return $this->hasOne(Grafeio::class);
    }

    public function nomoi()
    {
        return $this->hasOne(Nomos::class);
    }

    public function diakrisi()
    {
        return $this->hasOne(Diakrisi::class);
    }

    public function arxi_ekdosis_eggrafon(){
        return $this->hasOne(Arxi_ekdosis_eggrafon::class);
    }

    public function accident_place(){
        return $this->hasOne(Accident_place::class);
    }

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function pathon(){
        return $this->hasOne(Person::class);
    }

    public function ypaitios(){
        return $this->hasOne(Person::class);
    }

    public function oxima_pathon(){
        return $this->hasOne(Oxima::class);
    }

    public function oxima_ypatiou(){
        return $this->hasOne(Oxima::class);
    }
}
