<?php

namespace App\Src\AppHumanResources\Attendance\Domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = "attendances";

    protected $fillable = [
        'employee_id',
        'schedule_id',
        'check_in',
        'check_out',
        'description'
    ];
}
