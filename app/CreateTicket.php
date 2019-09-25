<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTicket extends Model
{
    use SoftDeletes;

    public $table = 'create_tickets';

    public static $searchable = [
        'create_ticket',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id_ticket',
        'created_at',
        'updated_at',
        'deleted_at',
        'create_ticket',
    ];
}
