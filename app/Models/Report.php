<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'anonymous',
        'reporter_name',
        'reporter_email',
        'reporter_phone',
        'victim_name',
        'victim_age',
        'victim_address',
        'abuse_type',
        'incident_description',
        'date',
        'time',
        'evidence',
    ];
}
