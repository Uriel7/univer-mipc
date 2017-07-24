<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
  protected $fillable = ['student_id', 'subject_id', 'qualification', 'created_at', 'updated_at'];
  public function student(){
    return $this->belongsTo('App\Student');
  }

  public function subject(){
    return $this->belongsTo('App\Subject');
  }
}
