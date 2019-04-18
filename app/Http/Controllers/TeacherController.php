<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Http\Requests;
use App\Repositories\TeacherRepository;

class TeacherController extends Controller
{
    /**
     * @var $teacher
     */
    private $teacher;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TeacherRepository $teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * Get all teacher.
     *
     * @return Illuminate\View
     */
    public function getAllTeachers($id = null)
    {
        $teachers = Teacher::all();

        $editTeacher = (isset($id)) ? $this->teacher->getById($id) : null;

        return view('teacher.index', compact('teachers', 'editTeacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('teacher.create');
    }

    
    /**
     * Store a teacher
     *
     * @var array $attributes
     * @return redirect
     */
    public function postStoreTeacher(Request $request)
    {
        $request->only(['code', 'name_id', 'name_ar', 'nip', 'gender']);

        Teacher::create($request->all());

        return redirect()->route('teacher.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update a teacher
     *
     * @var integer $id
     * @var array   $attributes
     * @return redirect
     */
    public function postUpdateTeacher($id, Request $request)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect()->route('teacher.index');
    }

    /**
     * Delete a teacher
     *
     * @var integer $id
     * @return redirect
     */
    public function postDeleteTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();
    
        return redirect()->route('teacher.index');
    }
}
