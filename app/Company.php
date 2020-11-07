<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'db_company';

    protected $guarded = ['id_company',
                            'Ypoloipo'];

    public $timestamps = false;
    protected $primaryKey= 'id_company';

    public function pragmatognomosini(){
        return $this->hasMany(Pragmatognomosini::class,'id_ekthesis','id_company');
    }

    public function departments(){
        return $this->belongsToMany('App\Department','db_company_dept','id_company','id_department')->withPivot('phone','Fax','Email','Respon');
    }
}
