<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table="_z_country";
    protected $fillable=
    [
        "iso",
        "name",
        "dname",
        "iso3",
        "position",
        "numcode",
        "phonecode"
    ];

}
