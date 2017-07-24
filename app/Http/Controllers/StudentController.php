<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
  # Student's list
  public function index(){
    $students = Student::all()->toArray();
    return View('students.index', compact('students'));
  }

  # New Student
  public function create(){
    return view('students.create');
  }

  # Create Student
  public function store(Request $request){
    $student = new Student([
      'name' => $request->get('name'),
      'surnames' => $request->get('surnames'),
      'birthdate' => $request->get('birthdate')
    ]);

    $student->save();
    return redirect('/alumnos');
  }

  # Show Student
  public function show($id){
    $student = Student::find($id);
    return view('students.show', compact('student', 'id'));
  }

  # Edit Student
  public function edit($id){
    $student = Student::find($id);
    return view('students.edit', compact('student', 'id'));
  }

  # Update Student
  public function update(Request $request, $id){
    $student = Student::find($id);
    $student->name = $request->get('name');
    $student->surnames = $request->get('surnames');
    $student->birthdate = $request->get('birthdate');
    $student->save();
    return redirect('/alumnos');
  }

  # Destroy Student
  public function destroy($id){
    $student = Student::find($id);
    $student->delete();

    return redirect('/alumnos');
  }
}
