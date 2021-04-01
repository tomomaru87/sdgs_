<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    protected $fillable=[
        'idea_name',
        'idea_theme',
        'idea_detail',
        'budget',
        'sales_tgt',
        'people',
        'people_qlt',
        'marketing',
        'sdgs_no'
        
    ];
}
