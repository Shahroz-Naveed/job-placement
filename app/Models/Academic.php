<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\JobController;

class Academic extends Model
{
    use HasFactory;
    protected $table = "academics";
    protected $PrimaryKey = "academic_id";
    
}
