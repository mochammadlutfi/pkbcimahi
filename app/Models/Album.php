<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'slug', 'foto', 'seo_keyword', 'seo_description', 'seo_tags', 'status'
    ];

    public function foto()
    {
        return $this->hasMany('App\Models\Foto', 'id', 'album_id');
    }

    public function penganggaran()
    {
        return $this->belongsTo('App\Models\Penganggaran', 'penganggaran_id', 'id');
    }
}
