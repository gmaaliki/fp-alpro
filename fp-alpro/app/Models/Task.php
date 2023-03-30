<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $primarykey = 'task_id';
    protected $fillable = [
        'task_name', 'task_status', 'tasklist_id',
    ];

    public function tasklist()
    {
        return $this->belongsTo(Tasklist::class, 'tasklist_id');
    }
}
