<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStageTypes extends Model
{
    use HasFactory;
 
   protected $fillable = [
        'stage_name',
        'stage_type', //life cycle stage or termination stage
    ];
}
