<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
      $subjects = Subject::all()->toArray();
      return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
      return view('subjects.create');
    }

    public function store(Request $request)
    {
      $subject = new Subject([
        'name' => $request->get('name')
      ]);

      $subject->save();
      return redirect('/materias');
    }

    public function show($id)
    {
      $subject = Subject::find($id);
      return view('subjects.show', compact('subject', 'id'));
    }

    public function edit($id)
    {
      $subject = Subject::find($id);
      return view('subjects.edit', compact('subject', 'id'));
    }

    public function update(Request $request, $id)
    {
      $subject = Subject::find($id);
      $subject->name = $request->get('name');
      $subject->save();
      return redirect('/materias');
    }

    public function destroy($id)
    {
      $subject = Subject::find($id);
      $subject->delete();

      return redirect('/materias');
    }
}
