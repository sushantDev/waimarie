<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoImage extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'photo_id', 'thumbnail', 'full' ];

    /**
     * @var array
     */
    protected $casts = [
        'photo_id' => 'integer',
    ];

    /**
     * get the product that owns the image
     */
    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
