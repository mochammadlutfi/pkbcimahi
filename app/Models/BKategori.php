<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BKategori extends Model
{
    protected $table = 'b_kategori';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'seo_keyword', 'seo_tags', 'seo_description', 'status'
    ];

    // public function foto()
    // {
    //     return $this->hasMany('App\Models\Foto', 'id', 'album_id');
    // }
}
