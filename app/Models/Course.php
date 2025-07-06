<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id'];

    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'offer_end_at' => 'datetime'
    ];


    public function getSkillsAttribute($value)
    {
        if (empty($value)) {
            return [];
        }
        return json_decode($value, true);
    }



    public function getProjectsAttribute($value)
    {
        if (empty($value)) {
            return [];
        }
        return json_decode($value, true);
    }


    public function getWhatYouLearnAttribute($value)
    {
        if (empty($value)) {
            return [];
        }
        return json_decode($value, true);
    }
}
