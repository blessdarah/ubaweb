<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ["name", "slug", "description", "detail", "start_date", "end_date"];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function eventUrl(): string
    {
        return "/events/{$this->id}/{$this->slug}";
    }
}
