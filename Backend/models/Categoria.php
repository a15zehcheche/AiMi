<?php

namespace AiMi\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'CATEGORIA';

    public $timestamps = true;
}