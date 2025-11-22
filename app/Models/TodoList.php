<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $table = 'todo_list';

    protected $fillable = [
        'user_id',
        'todo_name',
        'is_active',
        'comment',
        'date_created',
        'date_updated',
    ];

    public $timestamps = false; // want je gebruikt date_created / date_updated in plaats van created_at / updated_at
}

