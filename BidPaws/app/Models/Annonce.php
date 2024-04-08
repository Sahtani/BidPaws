<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'location',
        'age',
        'status', 
        'role'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(AnnonceImage::class);
    }
}
