<?php

namespace App\Models;

use App\Models\Annonce;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'annonce_id',
        'status',
    ];
    


    public function user(){
        $this->belongsTo(User::class);
    }

    public function annonce(){
        $this->belongsTo(Annonce::class);
    }
}
