<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;
    protected $guarded = ["created_at","updated_at"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
