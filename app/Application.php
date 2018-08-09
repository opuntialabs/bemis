<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    public function market(){
    	return $this->belongsTo('App\Market');
    }
}
