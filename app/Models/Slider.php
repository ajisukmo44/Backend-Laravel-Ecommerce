<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'judul', 'deskripsi', 'foto', 'url'
    ];
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function slider()
    {
    }
    public function getFotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
