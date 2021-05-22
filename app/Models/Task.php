<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function fetch_all()
    {
        return auth()->user()->tasks()->latest()->get();
    }

    public static function store($request)
    {
        auth()->user()->tasks()->firstOrCreate([
            'title' => $request['title'],
            'description' => $request['description']
        ]);
    }
}
