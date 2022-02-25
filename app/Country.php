<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'name', 'code', 'phonecode'
    ];

    public function Cities(){
        return $this->hasMany(City::class, 'country_id');
    }

}
