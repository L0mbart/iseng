<?php

namespace App\Http\Requests;

use App\CreateTicket;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCreateTicketRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('create_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:create_tickets,id',
        ];
    }
}
