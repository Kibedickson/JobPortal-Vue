<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use Sluggable;
    protected $guarded = [];

    public function sluggable(): array
    {
        return[
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function employer(){
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function candidate(){

        return $this->belongsTo(User::class, 'candidate_id');

    }

    public function proposals(){
        return $this->hasMany(Proposal::class, 'job_id');
    }
}
