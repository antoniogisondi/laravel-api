<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    /**
     * Get all of the comments for the Type
     *
     */
    public function projects()
    {
        return $this->hasMany(Project::class);

    }
}
