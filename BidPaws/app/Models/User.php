<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Annonce;
use App\Models\Conversation;
use App\Models\Favorite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
        'username',
        'number_phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isUser()
    {
        return $this->role === 'user';
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class) ;
    }


    public function conversations()
    {
        return $this->hasMany(Conversation::class,'user_id');
    }


    public function sentConversations()
    {
        return $this->hasMany(Conversation::class, 'user_id');
    }


    public function receivedConversations()
    {
        return $this->hasMany(Conversation::class, 'friend_id');
    }


    public function unreadMessagesCount()
    {
        
        $conversations = $this->conversations()->withCount(['messages' => function ($query) {
            $query->whereNull('read_at')->where('sender_id', '!=', $this->id);
        }])->get();

        $unreadMessagesCount = $conversations->sum('messages_count');

        return $unreadMessagesCount;
    }

}
