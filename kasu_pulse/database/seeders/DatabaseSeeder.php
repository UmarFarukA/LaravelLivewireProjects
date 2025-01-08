<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Event;
use App\Models\Follow;
use App\Models\ForumReplies;
use App\Models\ForumThreads;
use App\Models\Like;
use App\Models\Notification;
use App\Models\Post;
use App\Models\Reaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(15)->create();
        Category::factory(10)->create();
        Post::factory(20)->create();
        Comment::factory(50)->create();
        Like::factory(50)->create();
        Admin::factory(5)->create();
        Event::factory(10)->create();
        Follow::factory(50)->create();
        ForumThreads::factory(10)->create();
        ForumReplies::factory(50)->create();
        Notification::factory(10)->create();
        Reaction::factory(10)->create();
    }
}
