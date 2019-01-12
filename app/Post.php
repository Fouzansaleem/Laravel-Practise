<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
	//use notifiable;
    //
    protected $table ='posts';

    protected $fillable = [
        'title', 'description', 
    ];

 
    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id','id');
    }
}
