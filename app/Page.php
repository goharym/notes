<?php

namespace App;


class Page extends Model
{
       public function notes()
    {
    	return $this->hasMany(Note::class);
    }

    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
