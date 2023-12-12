<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note11 extends Model
{
    use HasFactory;
    protected $fillable = [
        'student11_id',
        'admin_id',
        'note',
        'admin_replay'
    ];

    public function Admins()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function Student11()
    {
        return $this->belongsTo(Student11::class, 'student11_id');
    }


}
