<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintForms extends Model
{
    use HasFactory;

    protected $fillable = [
        'complaint_form'
    ];

    protected $table = "complaint_forms";
}
