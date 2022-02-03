<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function categories()
    {
        return $this->hasMany(BlogCategory::class);
    }

    public function getCreatedAtFormattedAttribute()
    {
        return Carbon::parse($this->created_at)->locale('id_ID')->isoFormat('LLLL');
    }

    public function getThumbnailUrlAttribute()
    {
        return Storage::url($this->thumbnail);
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
