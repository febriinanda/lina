<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutLetter extends Model
{
    //
    protected $table = 'outletter';

    protected $fillable = [
      'from_who',
      'to_who',
      'letter_number',
      'key_number'
    ];

    public function setFromWhoAttribute($value){
      $this->attributes['from_who'] = strtolower($value);
    }

    public function setToWhoAttribute($value){
      $this->attributes['to_who'] = strtolower($value);
    }

    public function getFromWhoAttribute($value){
      return ucwords($value);
    }

    public function getToWhoAttribute($value){
      return ucwords($value);
    }

}
