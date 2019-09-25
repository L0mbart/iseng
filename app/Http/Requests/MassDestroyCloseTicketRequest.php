<?php

namespace App\Http\Requests;

use App\CloseTicket;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCloseTicketRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('close_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:close_tickets,id',
        ];
    }
}
