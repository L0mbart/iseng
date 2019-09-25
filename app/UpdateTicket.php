<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UpdateTicket extends Model
{
    use SoftDeletes;

    public $table = 'update_tickets';

    public static $searchable = [
        'update_ticket',
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
        'nomor_ticket',
        'update_ticket',
    ];
}
