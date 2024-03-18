<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class UserController extends Controller
{
    public function getTickets(Request $request) {
        $email = $request->input('email');

        return Ticket::where('user_email', '=', $email)
            ->paginate(5)
            ->get();
    }

    public function getStats() {
        
    }
}
