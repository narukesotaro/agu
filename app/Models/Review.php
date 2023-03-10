<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    { 
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'rating',
        'course_id',
    ]; 
}