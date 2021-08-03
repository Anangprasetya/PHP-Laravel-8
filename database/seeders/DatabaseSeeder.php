<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Anang Nur Prasetya',
        //     'email' => 'anang2000018047@webmail.uad.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy Aditya',
        //     'email' => 'doddy@yahoo.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Struktur Data',
            'slug' => 'struktur-data'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Pengenalan Machine Learning',
        //     'slug' => 'pengenalan-machine-learning',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at! Libero vel excepturi voluptatum illum necessitatibus! Distinctio sunt ut fugiat sed suscipit quia possimus laboriosam illo, quam praesentium quaerat, maxime laborum odit perspiciatis! Minima quidem nemo cum nulla veniam laudantium fugit voluptatem possimus dicta? Voluptatibus nam deserunt sed tenetur minima. Sed esse accusantium quae nam optio similique error ad perferendis dolores veritatis, inventore, maiores dicta facilis quos maxime voluptates blanditiis veniam eveniet? Molestiae eius, nobis ut omnis cupiditate temporibus animi et quibusdam quam repellat officia dignissimos magni quidem, ipsum, vitae labore! Rerum obcaecati fugit deserunt a! Repellendus quos quam exercitationem rerum, cupiditate accusantium, nostrum sint, qui iure esse sit! Odit esse commodi labore necessitatibus sed inventore est cumque, eius ea incidunt officiis praesentium debitis reiciendis nobis itaque perferendis ipsa aliquid reprehenderit repellendus unde, eos vero doloremque? Blanditiis deserunt dolorem fugiat, voluptate obcaecati tempore repellat ducimus enim error impedit doloremque modi eligendi nam officia molestiae tenetur cum, voluptatem iure sed! Voluptas magnam laborum, autem cumque vero et excepturi consequuntur, reprehenderit eligendi animi blanditiis nobis ducimus itaque placeat ipsam? Asperiores repellendus nostrum eveniet. Totam natus est, assumenda odio vitae magni facere quia eligendi aut a debitis magnam possimus veritatis eum atque tempore reiciendis repellat quae nemo! Sapiente reiciendis omnis quasi fugit incidunt dolores eum vero impedit alias voluptate ex, quia dolorem ratione dolore perferendis molestias beatae suscipit magni eaque culpa provident similique quo placeat. Neque dolore, totam animi laborum perferendis eum quod asperiores voluptatum culpa assumenda maiores tempora temporibus eveniet incidunt, quas velit odit molestias veniam nam consequuntur voluptas hic dicta. Iusto provident incidunt aliquid in ut dolor sint eaque corporis minima! Rem accusamus eaque, quam doloribus fugit distinctio ducimus expedita reiciendis provident iusto unde ipsum saepe qui debitis beatae suscipit ullam officiis, placeat consequatur libero in quidem adipisci quia. Blanditiis voluptas error, voluptatem nulla consectetur voluptates porro repudiandae corrupti, dolorem optio nisi magnam. Itaque soluta facere vel iste reiciendis animi ullam recusandae? Nobis quis unde rem officiis iure expedita? Inventore nemo nihil assumenda provident alias modi quidem cupiditate eaque. Iure quasi commodi voluptatem magni sunt, incidunt obcaecati! Quidem praesentium error, nisi iure nobis inventore! Molestias et ullam, earum eius autem dolore dolorem culpa quos exercitationem distinctio esse dolor vitae, dignissimos ut inventore tempora consequuntur aspernatur modi eligendi. Non nobis atque distinctio voluptatem saepe obcaecati quaerat, odit deleniti illum ipsa!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Pengenalan Regression',
        //     'slug' => 'pengenalan-regression',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at! Libero vel excepturi voluptatum illum necessitatibus! Distinctio sunt ut fugiat sed suscipit quia possimus laboriosam illo, quam praesentium quaerat, maxime laborum odit perspiciatis! Minima quidem nemo cum nulla veniam laudantium fugit voluptatem possimus dicta? Voluptatibus nam deserunt sed tenetur minima. Sed esse accusantium quae nam optio similique error ad perferendis dolores veritatis, inventore, maiores dicta facilis quos maxime voluptates blanditiis veniam eveniet? Molestiae eius, nobis ut omnis cupiditate temporibus animi et quibusdam quam repellat officia dignissimos magni quidem, ipsum, vitae labore! Rerum obcaecati fugit deserunt a! Repellendus quos quam exercitationem rerum, cupiditate accusantium, nostrum sint, qui iure esse sit! Odit esse commodi labore necessitatibus sed inventore est cumque, eius ea incidunt officiis praesentium debitis reiciendis nobis itaque perferendis ipsa aliquid reprehenderit repellendus unde, eos vero doloremque? Blanditiis deserunt dolorem fugiat, voluptate obcaecati tempore repellat ducimus enim error impedit doloremque modi eligendi nam officia molestiae tenetur cum, voluptatem iure sed! Voluptas magnam laborum, autem cumque vero et excepturi consequuntur, reprehenderit eligendi animi blanditiis nobis ducimus itaque placeat ipsam? Asperiores repellendus nostrum eveniet. Totam natus est, assumenda odio vitae magni facere quia eligendi aut a debitis magnam possimus veritatis eum atque tempore reiciendis repellat quae nemo! Sapiente reiciendis omnis quasi fugit incidunt dolores eum vero impedit alias voluptate ex, quia dolorem ratione dolore perferendis molestias beatae suscipit magni eaque culpa provident similique quo placeat. Neque dolore, totam animi laborum perferendis eum quod asperiores voluptatum culpa assumenda maiores tempora temporibus eveniet incidunt, quas velit odit molestias veniam nam consequuntur voluptas hic dicta. Iusto provident incidunt aliquid in ut dolor sint eaque corporis minima! Rem accusamus eaque, quam doloribus fugit distinctio ducimus expedita reiciendis provident iusto unde ipsum saepe qui debitis beatae suscipit ullam officiis, placeat consequatur libero in quidem adipisci quia. Blanditiis voluptas error, voluptatem nulla consectetur voluptates porro repudiandae corrupti, dolorem optio nisi magnam. Itaque soluta facere vel iste reiciendis animi ullam recusandae? Nobis quis unde rem officiis iure expedita? Inventore nemo nihil assumenda provident alias modi quidem cupiditate eaque. Iure quasi commodi voluptatem magni sunt, incidunt obcaecati! Quidem praesentium error, nisi iure nobis inventore! Molestias et ullam, earum eius autem dolore dolorem culpa quos exercitationem distinctio esse dolor vitae, dignissimos ut inventore tempora consequuntur aspernatur modi eligendi. Non nobis atque distinctio voluptatem saepe obcaecati quaerat, odit deleniti illum ipsa!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Jadwal Harian',
        //     'slug' => 'jadwal-harian',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at! Libero vel excepturi voluptatum illum necessitatibus! Distinctio sunt ut fugiat sed suscipit quia possimus laboriosam illo, quam praesentium quaerat, maxime laborum odit perspiciatis! Minima quidem nemo cum nulla veniam laudantium fugit voluptatem possimus dicta? Voluptatibus nam deserunt sed tenetur minima. Sed esse accusantium quae nam optio similique error ad perferendis dolores veritatis, inventore, maiores dicta facilis quos maxime voluptates blanditiis veniam eveniet? Molestiae eius, nobis ut omnis cupiditate temporibus animi et quibusdam quam repellat officia dignissimos magni quidem, ipsum, vitae labore! Rerum obcaecati fugit deserunt a! Repellendus quos quam exercitationem rerum, cupiditate accusantium, nostrum sint, qui iure esse sit! Odit esse commodi labore necessitatibus sed inventore est cumque, eius ea incidunt officiis praesentium debitis reiciendis nobis itaque perferendis ipsa aliquid reprehenderit repellendus unde, eos vero doloremque? Blanditiis deserunt dolorem fugiat, voluptate obcaecati tempore repellat ducimus enim error impedit doloremque modi eligendi nam officia molestiae tenetur cum, voluptatem iure sed! Voluptas magnam laborum, autem cumque vero et excepturi consequuntur, reprehenderit eligendi animi blanditiis nobis ducimus itaque placeat ipsam? Asperiores repellendus nostrum eveniet. Totam natus est, assumenda odio vitae magni facere quia eligendi aut a debitis magnam possimus veritatis eum atque tempore reiciendis repellat quae nemo! Sapiente reiciendis omnis quasi fugit incidunt dolores eum vero impedit alias voluptate ex, quia dolorem ratione dolore perferendis molestias beatae suscipit magni eaque culpa provident similique quo placeat. Neque dolore, totam animi laborum perferendis eum quod asperiores voluptatum culpa assumenda maiores tempora temporibus eveniet incidunt, quas velit odit molestias veniam nam consequuntur voluptas hic dicta. Iusto provident incidunt aliquid in ut dolor sint eaque corporis minima! Rem accusamus eaque, quam doloribus fugit distinctio ducimus expedita reiciendis provident iusto unde ipsum saepe qui debitis beatae suscipit ullam officiis, placeat consequatur libero in quidem adipisci quia. Blanditiis voluptas error, voluptatem nulla consectetur voluptates porro repudiandae corrupti, dolorem optio nisi magnam. Itaque soluta facere vel iste reiciendis animi ullam recusandae? Nobis quis unde rem officiis iure expedita? Inventore nemo nihil assumenda provident alias modi quidem cupiditate eaque. Iure quasi commodi voluptatem magni sunt, incidunt obcaecati! Quidem praesentium error, nisi iure nobis inventore! Molestias et ullam, earum eius autem dolore dolorem culpa quos exercitationem distinctio esse dolor vitae, dignissimos ut inventore tempora consequuntur aspernatur modi eligendi. Non nobis atque distinctio voluptatem saepe obcaecati quaerat, odit deleniti illum ipsa!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Kisah Harian',
        //     'slug' => 'kisah-harian',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, consequatur! Iusto, veritatis exercitationem dicta cumque repudiandae culpa! Quam, culpa esse. Sed, at! Libero vel excepturi voluptatum illum necessitatibus! Distinctio sunt ut fugiat sed suscipit quia possimus laboriosam illo, quam praesentium quaerat, maxime laborum odit perspiciatis! Minima quidem nemo cum nulla veniam laudantium fugit voluptatem possimus dicta? Voluptatibus nam deserunt sed tenetur minima. Sed esse accusantium quae nam optio similique error ad perferendis dolores veritatis, inventore, maiores dicta facilis quos maxime voluptates blanditiis veniam eveniet? Molestiae eius, nobis ut omnis cupiditate temporibus animi et quibusdam quam repellat officia dignissimos magni quidem, ipsum, vitae labore! Rerum obcaecati fugit deserunt a! Repellendus quos quam exercitationem rerum, cupiditate accusantium, nostrum sint, qui iure esse sit! Odit esse commodi labore necessitatibus sed inventore est cumque, eius ea incidunt officiis praesentium debitis reiciendis nobis itaque perferendis ipsa aliquid reprehenderit repellendus unde, eos vero doloremque? Blanditiis deserunt dolorem fugiat, voluptate obcaecati tempore repellat ducimus enim error impedit doloremque modi eligendi nam officia molestiae tenetur cum, voluptatem iure sed! Voluptas magnam laborum, autem cumque vero et excepturi consequuntur, reprehenderit eligendi animi blanditiis nobis ducimus itaque placeat ipsam? Asperiores repellendus nostrum eveniet. Totam natus est, assumenda odio vitae magni facere quia eligendi aut a debitis magnam possimus veritatis eum atque tempore reiciendis repellat quae nemo! Sapiente reiciendis omnis quasi fugit incidunt dolores eum vero impedit alias voluptate ex, quia dolorem ratione dolore perferendis molestias beatae suscipit magni eaque culpa provident similique quo placeat. Neque dolore, totam animi laborum perferendis eum quod asperiores voluptatum culpa assumenda maiores tempora temporibus eveniet incidunt, quas velit odit molestias veniam nam consequuntur voluptas hic dicta. Iusto provident incidunt aliquid in ut dolor sint eaque corporis minima! Rem accusamus eaque, quam doloribus fugit distinctio ducimus expedita reiciendis provident iusto unde ipsum saepe qui debitis beatae suscipit ullam officiis, placeat consequatur libero in quidem adipisci quia. Blanditiis voluptas error, voluptatem nulla consectetur voluptates porro repudiandae corrupti, dolorem optio nisi magnam. Itaque soluta facere vel iste reiciendis animi ullam recusandae? Nobis quis unde rem officiis iure expedita? Inventore nemo nihil assumenda provident alias modi quidem cupiditate eaque. Iure quasi commodi voluptatem magni sunt, incidunt obcaecati! Quidem praesentium error, nisi iure nobis inventore! Molestias et ullam, earum eius autem dolore dolorem culpa quos exercitationem distinctio esse dolor vitae, dignissimos ut inventore tempora consequuntur aspernatur modi eligendi. Non nobis atque distinctio voluptatem saepe obcaecati quaerat, odit deleniti illum ipsa!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
