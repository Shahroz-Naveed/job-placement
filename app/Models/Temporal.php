<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporal extends Model
{
    use HasFactory;
    protected $table =  "temporals";
    protected $PrimaryKey = "temporal_id";
}
