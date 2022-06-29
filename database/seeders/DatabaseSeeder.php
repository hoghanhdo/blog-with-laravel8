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
            'name' => 'Jane Doe',
            'user_name' => 'jane_doe'
        ]);
        $user2 = User::factory()->create([
            'name' => 'Eddie M',
            'user_name' => 'eddie_m'
        ]);
        $user3 = User::factory()->create([
            'name' => 'Maven Sarah',
            'user_name' => 'sarah_m'
        ]);
        $user4 = User::factory()->create([
            'name' => 'Camile Ann',
            'user_name' => 'ann_c'
        ]);
        Post::factory(5)->create([
            'user_id' => $user1->id
        ]);
        Post::factory(5)->create([
            'user_id' => $user2->id
        ]);
        Post::factory(10)->create([
            'user_id' => $user3->id
        ]);
        Post::factory(10)->create([
            'user_id' => $user4->id
        ]);
    }
}
