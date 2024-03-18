<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function getOpenTickets() {
        return Ticket::where('status', '=', 0)
            ->paginate(5)
            ->get();
    }

    public function getClosedTickets() {
        return Ticket::where('status', '=', 1)
            ->paginate(5)
            ->get();
    }
}
