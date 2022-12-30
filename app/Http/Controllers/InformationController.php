<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Console\View\Components\Info;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Information::paginate(10);
        return view('admin.information.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Information();

        $information = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'file'=>'required',
            'image'=>'required',
        ],[
            'title.required'=>"Iltimos ma'lumot sarlavhasini kiriting.",
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'image.required'=>"Iltimos ma'lumot haqida rasm yuklang.",
            'file.required'=>"Iltimos ma'lumot haqida fayl yuklang."

        ]);

        $data->title = $information['title'];
        $data->description = $information['description'];


        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('information',$imagename);
        $data->image = $imagename;



        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('information', $filename);
        $data->file = $filename;


        $data->save();

        return redirect()->route('admin.information');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Information::find($id);
        return view('admin.information.edit',[
            'information'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Information::find($id);

        $data->title = $request->title;
        $data->description = $request->description;

        if ($request->image != null) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('information', $imagename);
            $data->image = $imagename;
        };

        if ($request->file != null) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('information', $filename);
            $data->file = $filename;
        };

        $data->save();

        return redirect()->route('admin.information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Information::find($id);
        $data->delete();
        return redirect()->route('admin.information');
    }
}
