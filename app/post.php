<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
	//use notifiable;
    //
    protected $table ='posts';

    protected $fillable = [
        'title', 'description', 
    ];
}
