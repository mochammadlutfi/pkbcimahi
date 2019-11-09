<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'album_id', 'nama', 'path',
    ];

    public function album()
    {
        return $this->hasMany('App\Models\Album', 'album_id', 'id');
    }
}
