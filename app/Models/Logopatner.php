<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Logopatner extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'foto', 'url'
    ];
    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function Logopatner()
    {
    }
    public function getFotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
