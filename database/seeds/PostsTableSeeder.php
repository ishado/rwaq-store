<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i<20 ; $i++)
        {
            DB::table('posts')->insert([
                'post_title'    => $faker->text($maxNbchars = 50),
                'post_text'     => $faker->text(),
                'post_price'    => $faker->randomNumber(4),
                'user_id'       => rand(1,5),
                'category_id'   => rand(1,5),
                'country_id'    => rand(1,6),
                'created_at'    => $faker->date(),
                'updated_at'    => $faker->date(),
                // 'image_name'    => $faker->image('storage/images', 640, 480, null, false),
            ]);
        }
    }
}
