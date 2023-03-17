<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rely extends Model
{
    use HasFactory;
    
    protected $fillable = ['topic_id', 'user_id', 'content'];
}
