<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
   protected $fillable = [
       'id',
       'nama'
   ];

   function pesans(){
       return $this->hasMany('App\Pesan');
   }
}
