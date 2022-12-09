<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slide::paginate(10);
        return view('admin.slides.index',[
            'slides'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Slide();

        $slide = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'file'=>'required',
        ],[
            'title.required'=>'Iltimos slayd nomini kiriting.',
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'image.required'=>'Iltimos rasm yuklang.',
            'file.required'=>'Iltimos slayd faylini yuklang.'
        ]);

        $data->title = $slide['title'];
        $data->description = $slide['description'];
        $data->category = $request->category;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('slides', $imagename);
        $data->image = $imagename;

        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('slides', $filename);
        $data->file = $filename;

        $data->save();

        return redirect()->route('admin.slides');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('admin.slides.edit',[
            'slide'=>$slide
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        $slide->title = $request->title;
        $slide->description = $request->description;

        if ($request->image != null) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('slides', $imagename);
            $slide->image = $imagename;
        };

        if ($request->file != null) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('slides', $filename);
            $slide->file = $filename;
        };
        $slide->save();
        return redirect()->route('admin.slides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect()->route('admin.slides');
    }
}
