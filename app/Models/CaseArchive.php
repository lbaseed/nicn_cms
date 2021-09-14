<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseArchive extends Model
{
    use HasFactory;

    protected $fillable =[
        'case_id',
        'termination_msg',
        'termination_date',
        'comment'
    ];
}
