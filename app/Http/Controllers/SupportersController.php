<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSupporters;
use Illuminate\Support\Facades\DB;
use App\Models\Supporters;
use App\Http\Requests\StoreSupporters;

class SupportersController extends Controller
{
    public function index()
    {
        $supporters = Supporters::latest()->get();
        return view('backend.supporters.index',compact('supporters'));
    }

    public function create()
    {
        return view('backend.supporters.create');
    }

    public function store(StoreSupporters $request)
    {
        $supporters = Supporters::create($request->data());

        return redirect()->route('supporters.index')->withsuccess(trans('supporters image has been successfully created',[ 'etity' => 'supporters']));
    }

    public function show(Supporters $supporters)
    {
        return view($supporters->view,compact('supporters'));
    }

    public function edit(Supporters $supporters)
    {
        return view('backend.supporters.edit',compact('supporters'));
    }

    public function update(UpdateSupporters $request,Supporters $supporters)
    {
        DB::transaction(function () use($request,$supporters)
        {
            $supporters->update($request->data());

            $this->uploadRequestImage($request,$supporters);
        });
        return redirect()->route('supporters.index')->withsuccess(trans('supporters has been successfully updated',['entity'=>'supporters']));
    }

    public function delete(Supporters $supporters)
    {
        $supporters->delete();

        return back()->withsuccess(trans('Supporters as been deleted successfully', ['entity'=>'supporters']));
    }

}
