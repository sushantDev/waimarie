<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAbout;
use App\Http\Requests\UpdateAbout;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->get();
        return view('backend.about.index',compact('abouts'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(StoreAbout $request)
    {
        $about = About::create($request->data());

        return redirect()->route('about.index')->withsuccess(trans('About  has been successfully created',[ 'etity' => 'about']));
    }

    public function show(About $about)
    {
        return view($about->view,compact('abouts'));
    }

    public function edit(About $about)
    {
        return view('backend.about.edit',compact('about'));
    }

    public function update(UpdateAbout $request,About $about)
    {
        DB::transaction(function () use($request,$about)
        {
            $about->update($request->data());

//            $this->uploadRequestImage($request,$about);
        });
        return redirect()->route('about.index')->withsuccess(trans('about has been successfully updated',['entity'=>'about']));
    }

    public function delete(About $about)
    {
        $about->delete();

        return back()->withsuccess(trans('about has been deleted successfully', ['entity'=>'about']));
    }
}
