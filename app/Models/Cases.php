<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    protected $table="cases";
    protected $fillable = [
        'case_id',
        'case_name',
        'case_subject',
        'complaint_form',
        'claimant',
        'defendant',
        'filing_date',
        'assignment_date',
        'hearing_date',
        'adjournment_date',
        'termination_date',
        'division',
        'counsel',
        'current_stage',
        'comments'
    ];
}
