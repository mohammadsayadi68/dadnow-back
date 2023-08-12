<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'cover',
        'slug',
        'status',
        'audio'
    ];
    public function set(){
            return $this->belongsTo(Set::class);
    }
}
