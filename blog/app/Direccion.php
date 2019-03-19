<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    protected $fillable=['id','estado','ciudad','colonia','cp','calle','numero','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
