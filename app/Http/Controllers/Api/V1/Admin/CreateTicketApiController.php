<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CreateTicket;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCreateTicketRequest;
use App\Http\Requests\UpdateCreateTicketRequest;
use App\Http\Resources\Admin\CreateTicketResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateTicketApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('create_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CreateTicketResource(CreateTicket::all());
    }

    public function store(StoreCreateTicketRequest $request)
    {
        $createTicket = CreateTicket::create($request->all());

        return (new CreateTicketResource($createTicket))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CreateTicket $createTicket)
    {
        abort_if(Gate::denies('create_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CreateTicketResource($createTicket);
    }

    public function update(UpdateCreateTicketRequest $request, CreateTicket $createTicket)
    {
        $createTicket->update($request->all());

        return (new CreateTicketResource($createTicket))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CreateTicket $createTicket)
    {
        abort_if(Gate::denies('create_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createTicket->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
