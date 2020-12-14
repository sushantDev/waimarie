<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateVideos;
use Illuminate\Support\Facades\DB;
use App\Models\Videos;
use App\Http\Requests\StoreVideos;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Videos::latest()->get();
        return view('backend.videos.index',compact('videos'));
    }

    public function create()
    {
        return view('backend.videos.create');
    }

    public function store(StoreVideos $request)
    {
        $videos = Videos::create($request->data());

        return redirect()->route('videos.index')->withsuccess(trans('videos image has been successfully created',[ 'etity' => 'videos']));
    }

    public function show(Videos $videos)
    {
        return view($videos->view,compact('videos'));
    }

    public function edit(Videos $videos)
    {
        return view('backend.videos.edit',compact('videos'));
    }

    public function update(UpdateVideos $request,Videos $videos)
    {
        DB::transaction(function () use($request,$videos)
        {
            $videos->update($request->data());

            $this->uploadRequestImage($request,$videos);
        });
        return redirect()->route('videos.index')->withsuccess(trans('videos has been successfully updated',['entity'=>'videos']));
    }

    public function delete(Videos $videos)
    {
        $videos->delete();

        return back()->withsuccess(trans('Videos as been deleted successfully', ['entity'=>'videos']));
    }

}
