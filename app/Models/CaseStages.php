<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStages extends Model
{
    use HasFactory;

    protected $fillable=[
        'case_ref',
        'case_id',
        'prev_stage',
        'prev_stage_date',
        'new_stage',
        'new_stage_date',
    ];
}
 