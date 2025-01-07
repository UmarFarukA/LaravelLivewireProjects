<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Inquiry;
use App\Models\knowledgeSessions;
use App\Models\Submissions;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call([
        //     UserSeeder::class,
        //     SubmissionSeeder::class,
        //     CommentSeeder::class,
        //     InquirySeeder::class
        // ]);

        User::factory()->count(5)->create();
        Submissions::factory()->count(5)->create();
        Comment::factory()->count(5)->create();
        Inquiry::factory()->count(5)->create();
        knowledgeSessions::factory()->count(5)->create();
    }
}