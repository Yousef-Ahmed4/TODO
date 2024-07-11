<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable=['description','user_id'];
    public $table = 'tasks';

    public function isCompleted() {
        return $this->completed_at != null;
        
    }

}
