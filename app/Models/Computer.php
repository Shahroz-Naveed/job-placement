<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\JobController;


class Computer extends Model
{
    use HasFactory;
    protected $table = "computers";
    protected $PrimaryKey = "comp_id";

}
