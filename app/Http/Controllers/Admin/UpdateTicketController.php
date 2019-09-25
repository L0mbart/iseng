<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUpdateTicketRequest;
use App\Http\Requests\StoreUpdateTicketRequest;
use App\Http\Requests\UpdateUpdateTicketRequest;
use App\UpdateTicket;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateTicketController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('update_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $updateTickets = UpdateTicket::all();

        return view('admin.updateTickets.index', compact('updateTickets'));
    }

    public function create()
    {
        abort_if(Gate::denies('update_ticket_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.updateTickets.create');
    }

    public function store(StoreUpdateTicketRequest $request)
    {
        $updateTicket = UpdateTicket::create($request->all());

        return redirect()->route('admin.update-tickets.index');
    }

    public function edit(UpdateTicket $updateTicket)
    {
        abort_if(Gate::denies('update_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.updateTickets.edit', compact('updateTicket'));
    }

    public function update(UpdateUpdateTicketRequest $request, UpdateTicket $updateTicket)
    {
        $updateTicket->update($request->all());

        return redirect()->route('admin.update-tickets.index');
    }

    public function show(UpdateTicket $updateTicket)
    {
        abort_if(Gate::denies('update_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.updateTickets.show', compact('updateTicket'));
    }

    public function destroy(UpdateTicket $updateTicket)
    {
        abort_if(Gate::denies('update_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $updateTicket->delete();

        return back();
    }

    public function massDestroy(MassDestroyUpdateTicketRequest $request)
    {
        UpdateTicket::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
