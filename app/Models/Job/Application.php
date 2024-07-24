<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job\Timesheet;
use App\Models\User;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function timesheets()
    {
        return $this->hasMany(Timesheet::class, 'user_id');
    }
}
