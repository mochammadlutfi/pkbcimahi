<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pertanyaan_id', 'deskripsi', 'admin_id',
    ];

    public function pertanyaan()
    {
        return $this->belongsTo('App\Models\Pertanyaan', 'pertanyaan_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin', 'admin_id', 'id');
    }
}
