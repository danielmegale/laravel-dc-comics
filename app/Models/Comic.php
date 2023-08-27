<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'thumb', 'series', 'type', 'updated_at', 'created_at', 'pirce', 'series', 'sale_date', 'artists', 'writers'];
}
