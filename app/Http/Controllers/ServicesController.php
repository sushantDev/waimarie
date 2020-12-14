<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceCategory;
use App\Http\Requests\UpdateServiceCategory;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class ServicesController extends Controller
{
    public function index()
    {
        $servicecategorys = ServiceCategory::latest()->get();
        return view('backend.servicecategory.index',compact('servicecategorys'));
    }

    public function create()
    {
        return view('backend.servicecategory.create');
    }

    public function store(StoreServiceCategory $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|max:8000',
        ]);

//        dd($request);
        DB::transaction( function () use ($request)
        {
            $data = $request->data();

            $servicecategory = ServiceCategory::create($data);


            $this->uploadRequestImage($request,$servicecategory);
        });


        return redirect()->route('servicecategory.index')->withsuccess(trans('Gallery Category has been successfully created',[ 'etity' => 'servicecategory']));
    }

    public function show(ServiceCategory $servicecategory)
    {
        return view($servicecategory->view,compact('servicecategorys'));
    }

    public function edit(ServiceCategory $servicecategory)
    {
        return view('backend.servicecategory.edit',compact('servicecategory'));
    }

    public function update(UpdateServiceCategory $request,ServiceCategory $servicecategory)
    {
        DB::transaction(function () use($request,$servicecategory)
        {
            $servicecategory->update($request->data());

            $this->uploadRequestImage($request,$servicecategory);
        });
        return redirect()->route('servicecategory.index')->withsuccess(trans('servicecategory has been successfully updated',['entity'=>'servicecategory']));
    }

    public function delete(ServiceCategory $servicecategory)
    {
        $servicecategory->delete();

        return back()->withsuccess(trans('servicecategory has been deleted successfully', ['entity'=>'servicecategory']));
    }
}
