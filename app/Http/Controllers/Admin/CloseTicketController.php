<?php

namespace App\Http\Controllers\Admin;

use App\CloseTicket;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCloseTicketRequest;
use App\Http\Requests\StoreCloseTicketRequest;
use App\Http\Requests\UpdateCloseTicketRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CloseTicketController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('close_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $closeTickets = CloseTicket::all();

        return view('admin.closeTickets.index', compact('closeTickets'));
    }

    public function create()
    {
        abort_if(Gate::denies('close_ticket_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.closeTickets.create');
    }

    public function store(StoreCloseTicketRequest $request)
    {
        $closeTicket = CloseTicket::create($request->all());

        return redirect()->route('admin.close-tickets.index');
    }

    public function edit(CloseTicket $closeTicket)
    {
        abort_if(Gate::denies('close_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.closeTickets.edit', compact('closeTicket'));
    }

    public function update(UpdateCloseTicketRequest $request, CloseTicket $closeTicket)
    {
        $closeTicket->update($request->all());

        return redirect()->route('admin.close-tickets.index');
    }

    public function show(CloseTicket $closeTicket)
    {
        abort_if(Gate::denies('close_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.closeTickets.show', compact('closeTicket'));
    }

    public function destroy(CloseTicket $closeTicket)
    {
        abort_if(Gate::denies('close_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $closeTicket->delete();

        return back();
    }

    public function massDestroy(MassDestroyCloseTicketRequest $request)
    {
        CloseTicket::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
