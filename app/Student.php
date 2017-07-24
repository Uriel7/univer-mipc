<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;
use App\Score;

class Student extends Model
{
  protected $fillable = ['name', 'surnames', 'birthdate', 'created_at', 'updated_at'];

  # Relationships
  public function scores(){
    return $this->hasMany('App\Score');
  }

  // # Get all Subjects from Student
  public static function get_subjects($id){
    $subjects = Student::find($id)->scores->map(function ($score){
      return [
        'id'   => $score->id,
        'subject_id' => $score->subject_id,
        'name' => $score->subject->name,
        'qualification' => $score->qualification
      ];
    });
    return $subjects;
  }
}
