<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        User::create([
            'name' => "Deva Aji Saputra",
            'username' => 'devaas',
            'email' => 'Devaaji@gmail.com',
            'password' => bcrypt('123456')
        ]);



        User::factory(3)->create();
        // // \App\Models\User::factory(10)->create();
        // // User::create([
        // //     'name' => "Depdep",
        // //     'email' => 'depdep@gmail.com',
        // //     'password' => bcrypt('12345')
        // // ]);
        

        Category::create([
            'name' => "Web Programming",
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => "Personal",
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => "Web Design",
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni aspernatur dolor minima maxime adipisci aut?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, delectus. Expedita animi numquam praesentium recusandae repellendus minima eum et eius sed rem iste exercitationem blanditiis suscipit voluptatibus fuga impedit ab, corporis nemo perspiciatis quo esse veritatis. Fugiat veritatis ipsa tempore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni aspernatur dolor minima maxime adipisci aut?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, delectus. Expedita animi numquam praesentium recusandae repellendus minima eum et eius sed rem iste exercitationem blanditiis suscipit voluptatibus fuga impedit ab, corporis nemo perspiciatis quo esse veritatis. Fugiat veritatis ipsa tempore.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni aspernatur dolor minima maxime adipisci aut?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, delectus. Expedita animi numquam praesentium recusandae repellendus minima eum et eius sed rem iste exercitationem blanditiis suscipit voluptatibus fuga impedit ab, corporis nemo perspiciatis quo esse veritatis. Fugiat veritatis ipsa tempore.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
