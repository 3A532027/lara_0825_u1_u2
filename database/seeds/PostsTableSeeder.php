<?php

use Illuminate\Database\Seeder;
use App\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        foreach(range(1,20)as$number){
            Post::create([
                'title'=>'title'.$number,
                'content'=>'content'.$number,
            ]);
        }
    }
}
