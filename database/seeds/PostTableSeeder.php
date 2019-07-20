<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker::create();

      for ($i=0; $i < 20; $i++) {
          $post = new Post();
          $titolo = $faker->sentence();
          $dati_post = [
            'title' => $titolo,
            'content' => $faker->text(2000),
            'author' => $faker->firstName . ' ' . $faker->lastName,
            'slug' => Str::slug($titolo)
          ];
          $post->fill($dati_post);
          $post->save();
      }
    }
}
