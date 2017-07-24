<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Score;
use DB;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    public function create($id){
      $student = Student::find($id);

      if (!$student->scores->isEmpty()){
        $subjects = Self::get_subjects_not_assigned($id);
      }else{
        $subjects = Subject::all();
      }

     return view('scores.create')
      ->with('student', $student)
      ->with('subjects', $subjects);
    }


    public function store(Request $request, $student_id){
      $score = new Score([
        'student_id' => $student_id,
        'subject_id' => $request->get('subject'),
        'qualification' => $request->get('qualification')
      ]);

      $score->save();
      return redirect('/');
    }


    public function show($id)
    {
    
    }


    public function edit($student_id, $score_id){
      $student = Student::find($student_id);
      $score = Score::find($score_id);
      return view('scores.edit')
        ->with('student', $student)
        ->with('score', $score)
        ->render();
    }

    public function update($student_id, $score_id, Request $request)
    {
      $score = Score::find($score_id);
      $score->qualification = $request->get('qualification');
      $score->save();
      return redirect('/');
    }

    public function destroy($student_id, $score_id){
      $score = Score::find($score_id);
      $score->delete();

      return redirect('/');
    }


  // Get all Subjects not assigned
  private static function get_subjects_not_assigned($id){
    return DB::table('subjects')
      ->leftJoin('scores', 'subjects.id', '=', 'scores.subject_id')
      ->where('scores.student_id', '=', null)
      ->select('subjects.*')
      ->get();
  }
}
