<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todolist extends Model
{
    use HasFactory, NodeTrait;
	protected $fillable = ['todo', 'parent_id'];
	protected $hidden = ['created_at', 'updated_at'];
}
