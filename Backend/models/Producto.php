<?php

namespace AiMi\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'PRODUCTO';

    public $timestamps = true;

    /**
     * @return belongsToMany
     */
    public function tallas()
    {
        return $this->belongsToMany('AiMi\Models\Talla', 'PRODUCTO_TALLA', 'ID_PRODUCTO', 'ID_TALLA');
    }

    /*protected $fillable = [
        'id', 'name', 'active'
    ];*/
/*
    public function store()
    {
        return $this->belongsTo('eTorn\Models\Store', 'id_store');
    }

    public function turns()
    {
        return $this->hasMany('eTorn\Models\Turn', 'id_till');
    }*/
}