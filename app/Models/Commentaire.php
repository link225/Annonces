<?php

namespace App\Models;

use App\Models\User;
use App\Models\Articles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
