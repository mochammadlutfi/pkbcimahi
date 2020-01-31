<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use Sluggable;
    protected $table = 'berita';
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
                'source' => 'judul'
            ]
        ];
    }

    protected $fillable = [
        'judul','foto', 'foto_desk', 'slug', 'deskripsi', 'seo_keyword', 'seo_description', 'seo_tags', 'status', 'admin_id', 'b_kategori_id'
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin', 'admin_id', 'id');
    }

    public function bkategori()
    {
        return $this->belongsTo('App\Models\BKategori', 'b_kategori_id', 'id');
    }
}
