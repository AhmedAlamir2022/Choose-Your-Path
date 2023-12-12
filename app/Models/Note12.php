<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note12 extends Model
{
    use HasFactory;
    protected $fillable = [
        'student12_id',
        'admin_id',
        'note',
        'admin_replay'
    ];

    public function Admins()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function Student12()
    {
        return $this->belongsTo(Student12::class, 'student12_id');
    }
}
