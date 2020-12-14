<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreServicePhoto;
use App\Http\Requests\UpdateServicePhoto;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceCategory;
use App\Models\ServicePhoto;

class ServicePhotoController extends Controller
{
  public function index()
  {
    $servicephotos = ServicePhoto::latest()->paginate(10);
    return view('backend.servicephoto.index',compact('servicephotos'));
  }

  public function create()
  {$servicecategorys = ServiceCategory::pluck('slug','slug');
    return view('backend.servicephoto.create',compact('servicecategorys'));
  }

  public function store(StoreServicePhoto $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $servicephoto = ServicePhoto::create($data);
      if($request->hasFile('image')){
          $this->uploadRequestImage($request,$servicephoto);
      }
    });
    return redirect()->route('servicephoto.index')->withsuccess(trans('image has been successfully created',[ 'entity' => 'image']));
  }

  public function show(ServicePhoto $servicephoto)
  {
    return view($servicephoto->view,compact('servicephotos'));
  }

  public function edit(ServicePhoto $servicephoto)
  {
      $servicecategorys = ServiceCategory::pluck('slug','slug');
      return view('backend.servicephoto.edit',compact('servicephoto','servicecategorys'));
  }

  public function update(UpdateServicePhoto $request,ServicePhoto $servicephoto)
  {
    DB::transaction(function () use($request,$servicephoto)
    {
      $servicephoto->update($request->data());

      $this->uploadRequestImage($request,$servicephoto);
    });
    return redirect()->route('servicephoto.index')->withsuccess(trans('image has been successfully updated',['entity'=>'image']));
  }

  public function delete(servicephoto $servicephoto)
  {
       $servicephoto->delete();

        return back()->withsuccess(trans('image has been deleted successfully', ['entity'=>'servicephoto']));
  }
}
