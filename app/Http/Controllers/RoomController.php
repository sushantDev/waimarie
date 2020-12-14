<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRoom;
use App\Http\Requests\UpdateRoom;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceCategory;
use App\Models\Room;

class RoomController extends Controller
{
  public function index()
  {
    $rooms = Room::latest()->paginate(10);
    return view('backend.room.index',compact('rooms'));
  }

  public function create()
  {
//  {$servicecategorys = ServiceCategory::pluck('slug','slug');
    return view('backend.room.create');
  }

  public function store(StoreRoom $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $room = Room::create($data);
      if($request->hasFile('image')){
          $this->uploadRequestImage($request,$room);
      }
    });
    return redirect()->route('room.index')->withsuccess(trans('image has been successfully created',[ 'entity' => 'image']));
  }

  public function show(Room $room)
  {
    return view($room->view,compact('rooms'));
  }

  public function edit(Room $room)
  {
//      $servicecategorys = ServiceCategory::pluck('slug','slug');
      return view('backend.room.edit',compact('room'));
  }

  public function update(UpdateRoom $request,Room $room)
  {
    DB::transaction(function () use($request,$room)
    {
      $room->update($request->data());

      $this->uploadRequestImage($request,$room);
    });
    return redirect()->route('room.index')->withsuccess(trans('image has been successfully updated',['entity'=>'image']));
  }

  public function delete(room $room)
  {
       $room->delete();

        return back()->withsuccess(trans('image has been deleted successfully', ['entity'=>'room']));
  }
}
