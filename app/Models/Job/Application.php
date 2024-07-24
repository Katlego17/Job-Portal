<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job\Timesheet;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';


    protected $fillable = [
        'id',
        'cv',
        'job_id',
        'user_id',
        'email',
        'job_image',
        'job_title',
        'job_region',
        'company',
        'job_type',
        'employment_contract',
        'certified_id',
    ];

    public $timestamps = true;

    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }
}
