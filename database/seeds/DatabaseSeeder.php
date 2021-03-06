<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

       $user = factory(App\User::class, 30)->create();
       $post = factory(App\Post::class, 300)->create();
       $comment = factory(App\Comment::class, 500)->create();
    }
}