<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Student;
use App\Score;

class HomeController extends Controller
{
  public function index(){
    //
  }

  public function search(Request $request){
    $type = $request->get('type');
    $id = $request->get('id');
    $student_subjects = [];
    $students_enrolled = 0;
    if($type == 'student'){
      $result = Student::find($id);
      if ($result != null){
        $student_subjects = Student::get_subjects($id);
      }
    }else{
      $result = Subject::find($request->get('id'));
      if ($result != null){
        $students_enrolled = Score::where('subject_id', '=', $result->id)->count();
      }
    }
    if ($result != null){
      $returnHTML = view('home._result')
        ->with('result', $result)
        ->with('type', $type)
        ->with('student_subjects', $student_subjects)
        ->with('students_enrolled', $students_enrolled)
        ->render();
      return response()->json(['object'=> $result, 'html' => $returnHTML]);
    }else{
      return response()->json(['error'=> 'No se encontro ningún resultado']);
    }
  }

  public function result(){
    return view('home._result');
  }
}