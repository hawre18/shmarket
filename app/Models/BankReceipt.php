<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankReceipt extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function photo()
    {
        return $this->hasOne(Photo::class);
    }
}
