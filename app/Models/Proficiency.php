<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{
    use HasFactory;
    protected $table =  "proficiencies";
    protected $PrimaryKey = "skills_id";
}
