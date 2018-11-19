<?php

//Author: Wilmar Delgado
//Date: Nov 06 2018
//Email: wilmardp50@gmail.com

use Illuminate\Database\Seeder;
use App\User;
use App\Models\User as Profile;
use App\Models\Post;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();


        for ($i=0; $i < 7; $i++) {
            $user = new User();
            $user->email = $faker->email;
            $user->name = $faker->name;
            $user->password = bcrypt('12341234');
            $user->save();


            $userProfile = new Profile();
            $userProfile->user_id = $user->id;
            $userProfile->name = 'r/TwoXChromosomes';
            $userProfile->description = '&bull; Posted by&nbsp;';
            $userProfile->descriptionLink = 'u/punkhotline';
            $userProfile->image = 'https://picsum.photos/200/?random'.rand(1, 1000);
            $userProfile->save();
        

            $count = rand(5, 15);
            for ($j=0; $j < $count; $j++) {
                $post = new Post();
                $post->contentDescription = $faker->paragraph;
                $post->contentDescriptionLink = 'https://picsum.photos/200/?random'.rand(1, 100);
                $post->user_id = $user->id;
                $post->save();
            }

        }
    }
}

