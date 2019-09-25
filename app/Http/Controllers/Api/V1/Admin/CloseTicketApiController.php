<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CloseTicket;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCloseTicketRequest;
use App\Http\Requests\UpdateCloseTicketRequest;
use App\Http\Resources\Admin\CloseTicketResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CloseTicketApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('close_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CloseTicketResource(CloseTicket::all());
    }

    public function store(StoreCloseTicketRequest $request)
    {
        $closeTicket = CloseTicket::create($request->all());

        return (new CloseTicketResource($closeTicket))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CloseTicket $closeTicket)
    {
        abort_if(Gate::denies('close_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CloseTicketResource($closeTicket);
    }

    public function update(UpdateCloseTicketRequest $request, CloseTicket $closeTicket)
    {
        $closeTicket->update($request->all());

        return (new CloseTicketResource($closeTicket))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CloseTicket $closeTicket)
    {
        abort_if(Gate::denies('close_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $closeTicket->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
