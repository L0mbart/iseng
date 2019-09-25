<?php

namespace App\Http\Requests;

use App\UpdateTicket;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateUpdateTicketRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('update_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'update_ticket' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'nomor_ticket'  => [
                'required',
            ],
        ];
    }
}
