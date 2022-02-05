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
        // Truncate data before seeding
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $category = Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $category->id,
            'slug' => 'thailand',
            'title' =>  "10 places to visit in Thailand",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo assumenda rerum tempore beatae laborum dolore modi id, neque obcaecati atque placeat reprehenderit ea, praesentium doloribus recusandae earum accusantium quia dolorem.",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut modi dolore quam eos accusamus exercitationem neque provident recusandae, mollitia, dolorum impedit molestias blanditiis cupiditate dolorem! Ratione delectus quisquam eos eveniet!",
        ]);
    }
}
