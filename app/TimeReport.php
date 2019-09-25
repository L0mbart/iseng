<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeReport extends Model
{
    use SoftDeletes;

    public $table = 'time_reports';
}
