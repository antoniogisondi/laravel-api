<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Technology;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['type_id','titolo','descrizione','inizio_progetto','consegna_progetto','approvato', 'non_approvato', 'img'];
        /**
         * Get the user associated with the Project
         *
         */
        public function type()
        {
            return $this->belongsTo(Type::class);
        }

        /**
         * The roles that belong to the Project
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function technologies()
        {
            return $this->belongsToMany(Technology::class); 
        }

        public static function generateSlug($titolo){
            return Str::slug($titolo, '-');
        }
}

