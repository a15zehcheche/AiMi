<?php

namespace AiMi\Models;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'USUARI';

    public $timestamps = true;
}