<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable=[
        "nama",
        "pesan",
        "tipe_id"
    ];

    function tipe(){
        return $this->belongsTo('App\Tipe');
    }
}
