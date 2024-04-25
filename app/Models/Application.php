<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jobpost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'job_id', 'status'];

    const STATUS_PENDING = 0;
    const STATUS_ACCEPTED = 1;
    const STATUS_DENIED = 2;


    public function job()
    {
        return $this->belongsTo(Jobpost::class,'job_id');
    }
    
public function user()
{
    return $this->belongsTo(User::class);
}
}
