<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = [
        'school_id',
        'last_name',
        'first_name',
        'street_address',
        'apt_suite',
        'city',
        'state',
        'zip_code',
        'checked_in',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
