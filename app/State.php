<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable = ['name', 'country_id'];

    public function Country(){
       return $this->belongs(Country::class);
    }
    public function Cities(){
        return $this->hasMany(City::class, 'state_id');
    }
}
