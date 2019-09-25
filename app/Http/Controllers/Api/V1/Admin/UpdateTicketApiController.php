<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateTicketRequest;
use App\Http\Requests\UpdateUpdateTicketRequest;
use App\Http\Resources\Admin\UpdateTicketResource;
use App\UpdateTicket;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateTicketApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('update_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UpdateTicketResource(UpdateTicket::all());
    }

    public function store(StoreUpdateTicketRequest $request)
    {
        $updateTicket = UpdateTicket::create($request->all());

        return (new UpdateTicketResource($updateTicket))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(UpdateTicket $updateTicket)
    {
        abort_if(Gate::denies('update_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UpdateTicketResource($updateTicket);
    }

    public function update(UpdateUpdateTicketRequest $request, UpdateTicket $updateTicket)
    {
        $updateTicket->update($request->all());

        return (new UpdateTicketResource($updateTicket))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(UpdateTicket $updateTicket)
    {
        abort_if(Gate::denies('update_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $updateTicket->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
