<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'name',
        'group',
        'semester',
        'week',
        'period',
        'teacher',
        'online_or_offline',
        'how_to_valuate',
        'attendance',
        'text',
        'homework',
        'test_type',
        'has_report',
        'has_presentation',
        'image_path',
    ];
    
    public function reviews()
    {
        return $this->hasMany(Course::class);
    }
}