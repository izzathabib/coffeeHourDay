<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // Specify the table (optional if it matches the plural form of the model)
    protected $table = 'departments';

    // Specify the fillable attributes (in case you want to mass assign values like name)
    protected $fillable = ['name'];

    // Define the relationship to the TeamMember model
    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
    }

    // Timestamps are enabled by default, so you don't need to define them unless disabled
}
