<?php

namespace AiMi\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'CLIENTE';

    public $timestamps = true;
}