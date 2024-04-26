<?php

namespace App\Models;

use App\Models\AnnonceImage;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'location',
        'age',
        'status',
        'category_id',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function isFavorite()
    {
        return $this->favorites()->where('user_id', auth()->id())->exists();
    }
}
