<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syndicate extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class,'pharmacist_number', 'board_number');
    }
}
