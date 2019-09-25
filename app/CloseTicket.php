<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CloseTicket extends Model
{
    use SoftDeletes;

    public $table = 'close_tickets';

    public static $searchable = [
        'closeticket',
        'close_ticket',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'closeticket',
        'close_ticket',
    ];
}
