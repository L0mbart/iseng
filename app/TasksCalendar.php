<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TasksCalendar extends Model
{
    use SoftDeletes;

    public $table = 'tasks_calendars';
}
