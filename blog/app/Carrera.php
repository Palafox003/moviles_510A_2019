<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    protected $fillable=['id','numero','nombre','logo'];

    public function libros(){
    	return $this->hasMany('App\Libro');
    }
}
