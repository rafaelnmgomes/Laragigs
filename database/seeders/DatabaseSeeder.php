<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@test.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
