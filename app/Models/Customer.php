<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'is_blocked',
        'phone_number',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
