<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = ["created_at","updated_at"];

    public function personal()
    {
        return $this->hasOne(Personal::class,'id');
    }

    public function academic()
    {
        return $this->hasOne(Academic::class,'id');
    }

    public function professional()
    {
        return $this->hasOne(Professional::class,'id');
    }
}
