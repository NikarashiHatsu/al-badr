<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Teacher extends Model
{
    use HasFactory;

    public function getDateOfBirthFormattedAttribute()
    {
        return Carbon::parse($this->date_of_birth)
            ->locale('id_ID')
            ->isoFormat('LL');
    }

    public function getPhotoUrlAttribute()
    {
        return Storage::url($this->photo);
    }

    protected $fillable = [
        'photo',
        'name',
        'place_of_birth',
        'date_of_birth',
        'phone_number',
    ];
}
