<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_path',
       ' annonce_id'
    ];
    public function annonces(){
        return  $this->belongsTo(Annonce::class,'annonce_id');
    }
}
