<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    //
    public function market(){
    	return $this->belongsTo('App\Market');
    }
}
