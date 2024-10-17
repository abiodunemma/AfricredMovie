<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Laravel\Passport\HasApiTokens;
class Movie extends Model
{
    protected $fillable = ['userid', 'name','title', 'description', 'release_data', 'genre',  'thumbnail']; // Add username and userid

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}
