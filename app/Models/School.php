<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    protected $fillable = [
        'name',
        'short_name',
        'is_active',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
