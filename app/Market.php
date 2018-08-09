<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Market extends Model
{
    use Sluggable;
    //
    protected $fillable = [
    	'name','cover','avatar','description','slug'
    ];
    public function applications(){
        return $this->hasMany('App\Application');
    }
    public function solutions(){
        return $this->hasMany('App\Solution');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
