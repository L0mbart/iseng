<?php

namespace App\Http\Requests;

use App\CreateTicket;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCreateTicketRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('create_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'create_ticket' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'id_ticket'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
