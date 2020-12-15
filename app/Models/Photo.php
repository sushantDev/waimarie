<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title',
        'sub_description',
        'category',
        'url',
        'is_published'

    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    /**
     * @param $query
     * @param bool $type
     * @return mixed
     */
    public function scopePublished($query, $type = true)
    {
        return $query->where('is_published', $type);
    }

    /**
     * @param $query
     * @param bool $type
     * @return mixed
     */
    public function scopePrimary($query, $type = true)
    {
        return $query->where('is_primary', $type);
    }

    /**
     * The images that belongs to the gallery
     */
    public function images()
    {
        return $this->hasMany('App\Models\PhotoImage');
    }
}
