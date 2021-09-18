<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;

    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    
}
