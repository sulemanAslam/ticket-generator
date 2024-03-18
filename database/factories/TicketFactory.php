<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Ticket;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::factory()->create();

        return [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'user_email' => $user->email,
            'subject' => fake()->word(),
            'content' => fake()->paragraph(),
            'status' => 0 // Should be false by default
        ];
    }
}
