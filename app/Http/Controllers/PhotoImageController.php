<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\PhotoImage;
use App\Traits\UploadAble;
use Illuminate\Http\Request;

class PhotoImageController extends Controller
{
    use UploadAble;

    public function upload(Request $request)
    {
        $photo = Photo::where('id', $request->photo_id)->first();

        if ($request->has('image')) {
            $image = $this->uploadOne($request->image, 'storage/photos');

            $photoImage = new PhotoImage([
                'full' => $image,
            ]);

            $photo->images()->save($photoImage);
        }

        return response()->json([ 'status' => 'Success' ]);
    }

    public function delete($id)
    {
        $image = PhotoImage::findOrFail($id);

        if ($image->full != '') {
            $this->deleteOne($image->full);
        }
        $image->delete();

        return redirect()->back();
    }
}
