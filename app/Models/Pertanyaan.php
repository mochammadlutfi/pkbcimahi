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

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function qkategori()
    {
        return $this->belongsTo('App\Models\QKategori', 'kategori_id', 'id');
    }

    public function penganggaran()
    {
        return $this->belongsTo('App\Models\Penganggaran', 'penganggaran_id', 'id');
    }
}
