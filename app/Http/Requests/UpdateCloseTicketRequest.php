<?php

namespace App\Http\Requests;

use App\CloseTicket;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCloseTicketRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('close_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'close_ticket' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
