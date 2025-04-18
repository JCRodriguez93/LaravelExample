<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  \App\Models\Thread;
use  \App\Models\Tag;
use  \App\Models\Category;
use  \App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Tag::factory(6)->create();

         Category::factory(5)
    ->has(
        Thread::factory(10)->has(
            Comment::factory(8), 'comments' // 'comments' coincide con la relación definida aquí
        )
    )
    ->create();
         
            // tags
            $tags = Tag::all();

            Thread::all()-> each(function ($thread) use ($tags){
                $tag = $tags -> random(
            rand(1,6))->pluck('id')->toArray();
           
           
            $thread -> tags()->attach($tag);

        
        });


    }
}
