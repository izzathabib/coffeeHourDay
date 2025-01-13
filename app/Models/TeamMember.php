<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    // Specify the table (optional if it matches the plural form of the model)
    protected $table = 'team_members';

    // Specify the fillable attributes (the ones you want to be mass assignable)
    protected $fillable = ['department_id', 'name', 'role'];

    // Define the relationship to the Department model
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Timestamps are enabled by default, so you don't need to define them unless disabled
}