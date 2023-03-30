<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
    use HasFactory;
    protected $table = 'tasklists';
    protected $primarykey = 'tasklist_id';
    protected $fillable = [
        'tasklist_name', 'tasklist_desc',   'user_id',
    ];

    public function task()
    {
        return $this->hasMany(Task::class, 'tasklist_id');
    }   

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
