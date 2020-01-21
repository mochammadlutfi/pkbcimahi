<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Album extends Model
{
    use Sluggable;
    protected $table = 'album';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    protected $fillable = [
        'nama', 'slug', 'foto', 'seo_keyword', 'seo_description', 'seo_tags', 'status'
    ];

    public function fotonya()
    {
        return $this->hasMany('App\Models\Foto', 'album_id', 'id');
    }

    public function penganggaran()
    {
        return $this->belongsTo('App\Models\Penganggaran', 'penganggaran_id', 'id');
    }
}
