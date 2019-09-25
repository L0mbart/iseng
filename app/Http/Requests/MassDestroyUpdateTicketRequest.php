<?php

namespace App\Http\Requests;

use App\UpdateTicket;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUpdateTicketRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('update_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:update_tickets,id',
        ];
    }
}
