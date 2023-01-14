<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $data = Video::paginate(4);
        return view('admin.videos.index',[ 'data' => $data ]);
    }


    public function create()
    {
        return view('admin.videos.create');
    }


    public function store(Request $request)
    {
        $data = new Video();
        $data->name = $request->name;

        $url = $request->url;
        $ss="";
        $youtube = "https://www.youtube.com/embed/";
        for ( $i = strlen($url)-1; $i>0; $i-- ){
            if ($url[$i]=='/'){
                break;
            }
            $ss=$url[$i].$ss;

        }
        $youtube.=$ss;

        $data->url = $youtube;

        $data->save();

        return redirect()->back();
    }


    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
//        $videos = Video::find($id);

        return view('admin.videos.edit', [
            'data' => $video,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
//        $videos = Video::find($id);

        $video->name = $request->name;
        if ($request->url != null) {

            $url = $request->url;
            $ss="";
            $youtube = "https://www.youtube.com/embed/";
            for ( $i = strlen($url)-1; $i>0; $i-- ){
                if ($url[$i]=='/'){
                    break;
                }
                $ss=$url[$i].$ss;

            }
            $youtube.=$ss;

            $video->url = $youtube;

        }
        $video->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->back();
    }
}
