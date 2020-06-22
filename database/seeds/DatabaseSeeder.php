<?php

use App\Model\Category;
use App\Model\Comment;
use App\Model\Fish;
use App\Model\Like;
use App\User;
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
        // $this->call(UserSeeder::class);
        factory(User::class, 10)->create();
        factory(Category::class, 5)->create();
        factory(Fish::class, 10)->create();
        factory(Comment::class, 50)->create()->each(function($comment) {
            return $comment->like()->save(factory(Like::class)->make());
        });

    }
}
