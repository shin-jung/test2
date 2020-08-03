<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
// articles
{
    protected $fillable=[
    	'title', 'type', 'content', 'user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
