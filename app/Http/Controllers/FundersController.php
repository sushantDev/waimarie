<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\UpdateFunders;
use Illuminate\Support\Facades\DB;
//use App\Models\Image;
use App\Models\Funders;
use App\Models\Supporters;
use App\Http\Requests\StoreFunders;

class FundersController extends Controller
{
    public function index()
    {
        $funders = Funders::latest()->get();
        return view('backend.funders.index',compact('funders'));
    }

    public function create()
    {
        return view('backend.funders.create');
    }

    public function store(StoreFunders $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|max:5000',
        ]);
        DB::transaction( function () use ($request)
        {
            $data = $request->data();

            $funders = Funders::create($data);

            $this->uploadRequestImage($request,$funders);
        });


        return redirect()->route('funders.index')->withsuccess(trans('funders image has been successfully created',[ 'etity' => 'funders']));
    }

    public function show(Funders $funders)
    {
        return view($funders->view,compact('funders'));
    }

    public function edit(Funders $funders)
    {
        return view('backend.funders.edit',compact('funders'));
    }

    public function update(UpdateFunders $request,Funders $funders)
    {
        DB::transaction(function () use($request,$funders)
        {
            $funders->update($request->data());

            $this->uploadRequestImage($request,$funders);
        });
        return redirect()->route('funders.index')->withsuccess(trans('funders has been successfully updated',['entity'=>'funders']));
    }

    public function delete(Funders $funders)
    {
        $funders->delete();

        return back()->withsuccess(trans('Funders as been deleted successfully', ['entity'=>'funders']));
    }

}
