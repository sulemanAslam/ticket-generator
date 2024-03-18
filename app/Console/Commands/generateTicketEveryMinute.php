<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ticket;

class generateTicketEveryMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate-ticket-every-minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a ticket every minute for a user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Ticket::factory()->create();
    }
}
