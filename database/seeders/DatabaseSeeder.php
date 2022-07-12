<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        user::create([
            'name' => 'johanes kevin',
            'username' => 'johaneskevin',
            'email' => 'hikevinpandy@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // user::create([
        //     'name' => 'john',
        //     'email'=> 'johnbloys@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        category::create([
            'name' => 'Game Mobile',
            'slug'=> 'game-mobile'
        ]);
        category::create([
            'name' => 'Game Pc',
            'slug'=> 'game-pc'
        ]);

        category::create([
            'name' => 'Game Console',
            'slug'=> 'game-console'
        ]);

        post::factory(20)->create();

        // post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam. Ullam culpa obcaecati vero nemo temporibus ve
        //     ritatis perspiciatis reprehenderit minus voluptas numquam nostrum, eligendi nece
        //     ssitatibus qui ex eum</p><p> assumenda facere quam hic perferendis maxime, asper
        //     natur dolore. Aperiam in eum eius quas, esse eos quae, itaque animi placeat aute
        //     m cumque praesentium obcaecati quod velit architecto recusandae voluptates omnis
        //     , tempora numquam? In officia dolore reprehenderit illo necessitatibus voluptatu
        //     m consequatur! Dolores sint facere nemo quidem voluptas fugiat, illo, recusandae
        //      sequi molestiae repellendus quis optio amet? Distinctio aliquam quisquam vel?</
        //     p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam. Ullam culpa obcaecati vero nemo temporibus ve
        //     ritatis perspiciatis reprehenderit minus voluptas numquam nostrum, eligendi nece
        //     ssitatibus qui ex eum</p><p> assumenda facere quam hic perferendis maxime, asper
        //     natur dolore. Aperiam in eum eius quas, esse eos quae, itaque animi placeat aute
        //     m cumque praesentium obcaecati quod velit architecto recusandae voluptates omnis
        //     , tempora numquam? In officia dolore reprehenderit illo necessitatibus voluptatu
        //     m consequatur! Dolores sint facere nemo quidem voluptas fugiat, illo, recusandae
        //      sequi molestiae repellendus quis optio amet? Distinctio aliquam quisquam vel?</
        //     p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam. Ullam culpa obcaecati vero nemo temporibus ve
        //     ritatis perspiciatis reprehenderit minus voluptas numquam nostrum, eligendi nece
        //     ssitatibus qui ex eum</p><p> assumenda facere quam hic perferendis maxime, asper
        //     natur dolore. Aperiam in eum eius quas, esse eos quae, itaque animi placeat aute
        //     m cumque praesentium obcaecati quod velit architecto recusandae voluptates omnis
        //     , tempora numquam? In officia dolore reprehenderit illo necessitatibus voluptatu
        //     m consequatur! Dolores sint facere nemo quidem voluptas fugiat, illo, recusandae
        //      sequi molestiae repellendus quis optio amet? Distinctio aliquam quisquam vel?</
        //     p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fug
        //     a natus amet assumenda hic dolore vel cupiditate. Aperiam autem nisi, perspiciat
        //     is facilis sequi itaque quibusdam. Ullam culpa obcaecati vero nemo temporibus ve
        //     ritatis perspiciatis reprehenderit minus voluptas numquam nostrum, eligendi nece
        //     ssitatibus qui ex eum</p><p> assumenda facere quam hic perferendis maxime, asper
        //     natur dolore. Aperiam in eum eius quas, esse eos quae, itaque animi placeat aute
        //     m cumque praesentium obcaecati quod velit architecto recusandae voluptates omnis
        //     , tempora numquam? In officia dolore reprehenderit illo necessitatibus voluptatu
        //     m consequatur! Dolores sint facere nemo quidem voluptas fugiat, illo, recusandae
        //      sequi molestiae repellendus quis optio amet? Distinctio aliquam quisquam vel?</
        //     p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
