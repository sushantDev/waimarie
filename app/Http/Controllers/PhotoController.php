<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePhoto;
use App\Http\Requests\UpdatePhoto;
use Illuminate\Support\Facades\DB;
use App\Models\GalleryCategory;
use App\Models\Photo;

class PhotoController extends Controller
{
  public function index()
  {
    $photos = Photo::latest()->paginate(5);
    return view('backend.photo.index',compact('photos'));
  }

  public function create()
  {
      $gallerycategorys = GalleryCategory::pluck('slug','slug');
    return view('backend.photo.create',compact('gallerycategorys'));
  }

  public function store(StorePhoto $request)
  {
//      dd('here');
//    DB::transaction( function () use ($request)
//    {
        $data = $request->all();
//        dd($data);

//
////        dd($request->file('image'));
////        $data[] = $request->all();
////        $test = $data;

        $photo = Photo::create($data);
//        dd($photo);
////
///
//      if($request->hasfile('image'))
//      {
//
//          foreach($request->file('image') as $image)
//          {
//              $name=$image->getClientOriginalName();
//              $image->move(public_path().'/images/', $name);
//              $data[] = $name;
//          }
//      }
//      dd(json_encode($name));
//
//      $form= new Form();
//      $form->image=json_encode($data);
//
//
//      $form->save();
//
//      return back()->with('success', 'Your images has been successfully');
//      foreach($request->file('image') as $image)
//      {
//          dd($image);
          $this->uploadRequestImage($request, $photo);
//      }

////    });
////
////        dd('here');
////        $data = $request->all();
////dd($request->file('image'));
//////        dd($data->title);
////        foreach ($request->file('image') as $image)
////        {
////            $photo = $image->getClientOriginalName();
////            $image->move(public_path().'/image/', $photo);
////            $data[] = $photo;
//////        $photo = Photo::create($image);
//////        dd($photo);        dd($data);

//////        $this->uploadRequestImage($request,$photo);
////        }
////        foreach ($request->photos as $photo) {
////            $filename = $photo->store('photos');
////            ProductsPhoto::create([
////                'product_id' => $product->id,
////                'filename' => $filename
////            ]);
////        }
//
////      dd($photo);
////      foreach($photo as $pho){
////      }$thi
////        $upload_model =
////    });
    return redirect()->route('photo.index')
        ->withsuccess(trans('image has been successfully created',[ 'entity' => 'image']));
  }

  public function show(Photo $photo)
  {
    return view($photo->view,compact('photos'));
  }

  public function edit(Photo $photo)
  {
      $gallerycategorys = GalleryCategory::pluck('slug','slug');
      return view('backend.photo.edit',compact('photo','gallerycategorys'));
  }

  public function update(UpdatePhoto $request,Photo $photo)
  {
    DB::transaction(function () use($request,$photo)
    {
      $photo->update($request->data());

      $this->uploadRequestImage($request,$photo);
    });
    return redirect()->route('photo.index')->withsuccess(trans('image has been successfully updated',['entity'=>'image']));
  }

  public function delete(photo $photo)
  {
       $photo->delete();

        return back()->withsuccess(trans('image has been deleted successfully', ['entity'=>'photo']));
  }
}
