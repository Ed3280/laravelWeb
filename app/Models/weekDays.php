<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weekDays extends Model
{
    use HasFactory;
    protected $table = "week_days";
    public $timestamps = false;
}
