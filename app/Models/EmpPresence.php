<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpPresence extends Model
{
    use HasFactory;

    protected $table = 'emp_presence';

    protected $fillable = [
        'employee_id',
        'check_in',
        'check_out',
        'late_in',
        'early_out'
    ];
}
