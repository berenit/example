<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'job_listings';

    protected $fillable = ['employer_id', 'title', 'salary'];

    public function employer()  {
        return $this->belongsTo(Employer::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
