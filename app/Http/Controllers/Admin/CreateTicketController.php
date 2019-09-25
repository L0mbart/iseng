<?php

namespace App\Http\Controllers\Admin;

use App\CreateTicket;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCreateTicketRequest;
use App\Http\Requests\StoreCreateTicketRequest;
use App\Http\Requests\UpdateCreateTicketRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateTicketController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('create_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createTickets = CreateTicket::all();

        return view('admin.createTickets.index', compact('createTickets'));
    }

    public function create()
    {
        abort_if(Gate::denies('create_ticket_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.createTickets.create');
    }

    public function store(StoreCreateTicketRequest $request)
    {
        $createTicket = CreateTicket::create($request->all());

        return redirect()->route('admin.create-tickets.index');
    }

    public function edit(CreateTicket $createTicket)
    {
        abort_if(Gate::denies('create_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.createTickets.edit', compact('createTicket'));
    }

    public function update(UpdateCreateTicketRequest $request, CreateTicket $createTicket)
    {
        $createTicket->update($request->all());

        return redirect()->route('admin.create-tickets.index');
    }

    public function show(CreateTicket $createTicket)
    {
        abort_if(Gate::denies('create_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.createTickets.show', compact('createTicket'));
    }

    public function destroy(CreateTicket $createTicket)
    {
        abort_if(Gate::denies('create_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createTicket->delete();

        return back();
    }

    public function massDestroy(MassDestroyCreateTicketRequest $request)
    {
        CreateTicket::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
