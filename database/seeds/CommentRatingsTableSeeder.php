<?php

use Illuminate\Database\Seeder;
use App\Models\CommentRating;

class CommentRatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CommentRating::class, 5)->create();
    }
}
