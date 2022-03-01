<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post();
        $p->content = "Ejemplo de post 1";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Ejemplo de post 2";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Ejemplo de post 3";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Ejemplo de post 4";
        $p->user_id = 2;
        $p->save();

        $p = new Post();
        $p->content = "Ejemplo de post 2";
        $p->user_id = 2;
        $p->save();

    }
}
