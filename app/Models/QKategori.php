<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QKategori extends Model
{
    protected $table = 'q_kategori';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'seo_keyword', 'seo_tags', 'seo_description'
    ];

    // public function foto()
    // {
    //     return $this->hasMany('App\Models\Foto', 'id', 'album_id');
    // }
}
