<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // No need for truncation if php artisan migrate:fresh --seed
        $user1 = User::factory()->create([
            'name' => 'Jane Doe'
        ]);
        $user2 = User::factory()->create([
            'name' => 'Eddie M'
        ]);
        Post::factory(3)->create([
            'user_id' => $user1->id
        ]);
        Post::factory(3)->create([
            'user_id' => $user2->id
        ]);
    }
}
