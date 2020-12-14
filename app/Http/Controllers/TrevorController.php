<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTrevor;
use App\Http\Requests\UpdateTrevor;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceCategory;
use App\Models\Trevor;

class TrevorController extends Controller
{
  public function index()
  {
    $trevors = Trevor::latest()->paginate(10);
    return view('backend.trevor.index',compact('trevors'));
  }

  public function create(){
    return view('backend.trevor.create');
  }

  public function store(StoreTrevor $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $trevor = Trevor::create($data);
          $this->uploadRequestImage($request,$trevor);
    });
    return redirect()->route('trevor.index')->withsuccess(trans('image has been successfully created',[ 'entity' => 'image']));
  }

  public function show(Trevor $trevor)
  {
      return view('backend.trevor.edit',compact('trevor'));
  }

  public function update(UpdateTrevor $request,Trevor $trevor)
  {
    DB::transaction(function () use($request,$trevor)
    {
      $trevor->update($request->data());

      $this->uploadRequestImage($request,$trevor);
    });
    return redirect()->route('trevor.index')->withsuccess(trans('image has been successfully updated',['entity'=>'image']));
  }

  public function delete(trevor $trevor)
  {
       $trevor->delete();

        return back()->withsuccess(trans('image has been deleted successfully', ['entity'=>'trevor']));
  }
}
