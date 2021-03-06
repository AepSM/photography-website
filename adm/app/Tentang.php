<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tentang extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'deskripsi', 'img'
    ];
}
