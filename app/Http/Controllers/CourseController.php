<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::paginate(10);
        return view('admin.courses.index',[
            'courses'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Course();

        $course = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'file'=>'required'
        ],[
            'title.required'=>'Iltimos kurs nomini kiriting.',
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'file.required'=>'Iltimos kurs faylini yuklang.'
        ]);

        $data->category = $request->category;
        $data->title_uz = $course['title'];
        $data->description = $course['description'];

        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('courses', $filename);
        $data->file = $filename;

        $data->save();

        return redirect()->route('admin.cources');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        dd($course);
        return view('admin.courses.edit',[
            'course'=>$course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        dd($course);
        $course->delete();
        return redirect()->route('admin.cources');
    }
}
