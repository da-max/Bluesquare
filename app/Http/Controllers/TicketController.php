<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Ticket;
use App\Models\Type;
use App\Models\User;
use Illuminate\View\View;

class TicketController extends Controller
{
    public function index(): View
    {
        return view('ticket.index', ['tickets' => Ticket::all()]);
    }

    public function show(Ticket $ticket): View
    {
        return view('ticket.show', ['ticket' => $ticket]);
    }

    public function create(): View
    {
        return view('ticket.create', [
            'ticket' => new Ticket(),
            'types' => Type::all(),
            'priorities' => Priority::all(),
        ]);
    }

    public function destroy(Ticket $ticket) {
        Ticket::destroy($ticket->id);
        return to_route('tickets.index')->withErrors(['message' => 'Le ticket a bien été supprimé.']);
    }

    public function store(TicketRequest $request)
    {
        $ticket = Ticket::create(array_merge($request->validated(), ['status_id' => Status::find(1)->id, 'creator_id' => User::find(1)->id]));
        return to_route('tickets.index')->withErrors(['message' => "Le ticket {$ticket->id} a bien été ajouté."]);
    }
}
