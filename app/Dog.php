<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'date_of_birth', 'breed_id'];
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}
