<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  protected $fillable = ['name', 'created_at', 'updated_at'];

  # Relationships
  public function scores(){
      return $this->hasMany('App\Score');
    }
}
