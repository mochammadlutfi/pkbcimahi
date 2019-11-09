<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul', 'slug', 'deskripsi', 'seo_keyword', 'seo_description', 'seo_tags', 'status', 'user_id'
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
