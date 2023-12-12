<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'universty_id',
        'percentage',
    ];

    public function Universties()
    {
        return $this->belongsTo(Universty::class, 'universty_id');
    }
}
