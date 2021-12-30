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
            'name' => 'Christian Halim',
            'user_type' => 'admin',
            'username' => 'haneure',
            'email' => 'chris.richard.halim@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Kirigaya Kazuto',
        //     'email' => 'kirigaya.kazuto@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, id.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo id repellendus deserunt sint nobis! Minima, veniam? Sint temporibus laborum doloremque odit optio neque cumque provident commodi aliquam aut labore pariatur, sit, ipsam praesentium incidunt, necessitatibus ullam accusamus a!</p><p>Ducimus ad exercitationem dolores rem voluptatem quidem nisi nihil excepturi nemo, nesciunt, ipsa numquam reprehenderit adipisci sapiente nulla? Alias officia iure adipisci soluta neque laudantium doloribus atque quis ducimus dolore blanditiis magnam saepe dolorem, ipsam, quae numquam sunt sed asperiores similique, vel praesentium.<p><p>Asperiores quia architecto voluptatem pariatur officiis veniam soluta! Ullam corrupti amet porro voluptatibus quae neque ratione commodi odit impedit laboriosam labore, laudantium ipsam id qui quibusdam facere, blanditiis enim aperiam! Alias, laborum in. Excepturi mollitia doloremque deleniti harum vitae distinctio voluptas odit perspiciatis molestiae nam, cum quo quibusdam beatae quidem ipsum debitis. Id in odit impedit reiciendis sapiente porro provident, earum magnam doloremque. Neque quod aliquam dolore sunt deleniti!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, id.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo id repellendus deserunt sint nobis! Minima, veniam? Sint temporibus laborum doloremque odit optio neque cumque provident commodi aliquam aut labore pariatur, sit, ipsam praesentium incidunt, necessitatibus ullam accusamus a!</p><p>Ducimus ad exercitationem dolores rem voluptatem quidem nisi nihil excepturi nemo, nesciunt, ipsa numquam reprehenderit adipisci sapiente nulla? Alias officia iure adipisci soluta neque laudantium doloribus atque quis ducimus dolore blanditiis magnam saepe dolorem, ipsam, quae numquam sunt sed asperiores similique, vel praesentium.<p><p>Asperiores quia architecto voluptatem pariatur officiis veniam soluta! Ullam corrupti amet porro voluptatibus quae neque ratione commodi odit impedit laboriosam labore, laudantium ipsam id qui quibusdam facere, blanditiis enim aperiam! Alias, laborum in. Excepturi mollitia doloremque deleniti harum vitae distinctio voluptas odit perspiciatis molestiae nam, cum quo quibusdam beatae quidem ipsum debitis. Id in odit impedit reiciendis sapiente porro provident, earum magnam doloremque. Neque quod aliquam dolore sunt deleniti!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, id.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo id repellendus deserunt sint nobis! Minima, veniam? Sint temporibus laborum doloremque odit optio neque cumque provident commodi aliquam aut labore pariatur, sit, ipsam praesentium incidunt, necessitatibus ullam accusamus a!</p><p>Ducimus ad exercitationem dolores rem voluptatem quidem nisi nihil excepturi nemo, nesciunt, ipsa numquam reprehenderit adipisci sapiente nulla? Alias officia iure adipisci soluta neque laudantium doloribus atque quis ducimus dolore blanditiis magnam saepe dolorem, ipsam, quae numquam sunt sed asperiores similique, vel praesentium.<p><p>Asperiores quia architecto voluptatem pariatur officiis veniam soluta! Ullam corrupti amet porro voluptatibus quae neque ratione commodi odit impedit laboriosam labore, laudantium ipsam id qui quibusdam facere, blanditiis enim aperiam! Alias, laborum in. Excepturi mollitia doloremque deleniti harum vitae distinctio voluptas odit perspiciatis molestiae nam, cum quo quibusdam beatae quidem ipsum debitis. Id in odit impedit reiciendis sapiente porro provident, earum magnam doloremque. Neque quod aliquam dolore sunt deleniti!</p>',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, id.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo id repellendus deserunt sint nobis! Minima, veniam? Sint temporibus laborum doloremque odit optio neque cumque provident commodi aliquam aut labore pariatur, sit, ipsam praesentium incidunt, necessitatibus ullam accusamus a!</p><p>Ducimus ad exercitationem dolores rem voluptatem quidem nisi nihil excepturi nemo, nesciunt, ipsa numquam reprehenderit adipisci sapiente nulla? Alias officia iure adipisci soluta neque laudantium doloribus atque quis ducimus dolore blanditiis magnam saepe dolorem, ipsam, quae numquam sunt sed asperiores similique, vel praesentium.<p><p>Asperiores quia architecto voluptatem pariatur officiis veniam soluta! Ullam corrupti amet porro voluptatibus quae neque ratione commodi odit impedit laboriosam labore, laudantium ipsam id qui quibusdam facere, blanditiis enim aperiam! Alias, laborum in. Excepturi mollitia doloremque deleniti harum vitae distinctio voluptas odit perspiciatis molestiae nam, cum quo quibusdam beatae quidem ipsum debitis. Id in odit impedit reiciendis sapiente porro provident, earum magnam doloremque. Neque quod aliquam dolore sunt deleniti!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
