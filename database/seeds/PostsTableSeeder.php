<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;
use Carbon\Carbon;


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
        Post::truncate();

        foreach(range(1,20)as$number){

            $total=20;
            $faker=Faker::create('zh_TW');
            Post::create([
                'title'=>'title'.$number,
                'content'=>'content'.$number,
//                'title'=>'title'.$number,
//                'content'=>'content'.$number,

                'title'=>$faker->sentence,
                'content'=>$faker->paragraph,
                'is_feature'=>rand(0,1),
                'created_at'=>Carbon::now()->subDays($total-$number),
                'updated_at'=>Carbon::now()->subDays($total-$number),
            ]);
        }
    }
}
