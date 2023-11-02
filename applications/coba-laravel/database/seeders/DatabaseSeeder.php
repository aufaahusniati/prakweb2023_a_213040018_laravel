<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Aufaa Husniati',
            'email' => 'aufaahsnt21@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Jungkook sanusi',
            'email' => 'jungkooksanusi@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis totam nisisaepe dignissimos perspiciatis facere esse perferendis, nulla libero iure fugit quis distinctio impedit veritatis necessitatibus quasi sunt.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis totam nisisaepe dignissimos perspiciatis facere esse perferendis, nulla libero iure fugit quis distinctio impedit veritatis necessitatibus quasi sunt.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis totam nisisaepe dignissimos perspiciatis facere esse perferendis, nulla libero iure fugit quis distinctio impedit veritatis necessitatibus quasi sunt.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis totam nisisaepe dignissimos perspiciatis facere esse perferendis, nulla libero iure fugit quis distinctio impedit veritatis necessitatibus quasi sunt.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
