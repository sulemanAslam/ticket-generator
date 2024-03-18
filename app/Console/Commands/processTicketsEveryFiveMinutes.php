<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ticket;

class processTicketsEveryFiveMinutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process-tickets-every-five-minutes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process tickets every five minutes in chronological order';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $ticketToBeProcessed = Ticket::where('status', '=', 0)
            ->orderBy('created_at', 'asc')
            ->first();

        $ticketToBeProcessed->status = 1;
        $ticketToBeProcessed->save();
    }
}
