<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    use HasFactory;


    public $table = "master.merk";

    protected $filltable = [
        "id",
        "nama",
        "keterangan",
    ];
}
