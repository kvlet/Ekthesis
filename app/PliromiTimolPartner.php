<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PliromiTimolPartner extends Model
{
    protected $table = 'db_pliromes_timologion_partner';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= ['Ar_timologio_partner','id_partner'];
    public $incrementing = false;

    protected function getKeyForSaveQuery()
    {

        $primaryKeyForSaveQuery = array(count($this->primaryKey));

        foreach ($this->primaryKey as $i => $pKey) {
            $primaryKeyForSaveQuery[$i] = isset($this->original[$this->getKeyName()[$i]])
                ? $this->original[$this->getKeyName()[$i]]
                : $this->getAttribute($this->getKeyName()[$i]);
        }

        return $primaryKeyForSaveQuery;

    }

    /**
     * Set the keys for a save update query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(Builder $query)
    {

        foreach ($this->primaryKey as $i => $pKey) {
            $query->where($this->getKeyName()[$i], '=', $this->getKeyForSaveQuery()[$i]);
        }

        return $query;
    }
}
