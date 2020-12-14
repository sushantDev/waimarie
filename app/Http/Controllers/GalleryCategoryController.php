<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGalleryCategory;
use App\Http\Requests\UpdateGalleryCategory;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $gallerycategorys = GalleryCategory::latest()->get();
        return view('backend.gallerycategory.index',compact('gallerycategorys'));
    }

    public function create()
    {
        return view('backend.gallerycategory.create');
    }

    public function store(StoreGalleryCategory $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|max:8000',
        ]);

//        dd($request);
        DB::transaction( function () use ($request)
        {
            $data = $request->data();

            $gallerycategory = GalleryCategory::create($data);


            $this->uploadRequestImage($request,$gallerycategory);
        });


        return redirect()->route('gallerycategory.index')->withsuccess(trans('Gallery Category has been successfully created',[ 'etity' => 'gallerycategory']));
    }

    public function show(GalleryCategory $gallerycategory)
    {
        return view($gallerycategory->view,compact('gallerycategorys'));
    }

    public function edit(GalleryCategory $gallerycategory)
    {
        return view('backend.gallerycategory.edit',compact('gallerycategory'));
    }

    public function update(UpdateGalleryCategory $request,GalleryCategory $gallerycategory)
    {
        DB::transaction(function () use($request,$gallerycategory)
        {
            $gallerycategory->update($request->data());

            $this->uploadRequestImage($request,$gallerycategory);
        });
        return redirect()->route('gallerycategory.index')->withsuccess(trans('gallerycategory has been successfully updated',['entity'=>'gallerycategory']));
    }

    public function delete(GalleryCategory $gallerycategory)
    {
        $gallerycategory->delete();

        return back()->withsuccess(trans('gallerycategory has been deleted successfully', ['entity'=>'gallerycategory']));
    }
}
