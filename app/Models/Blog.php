<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    protected $fillable = [
        'creator_id',
        'slug',
        'title',
        'description',
        'thumbnail',
        'is_published',
        'view_count',
    ];
}
