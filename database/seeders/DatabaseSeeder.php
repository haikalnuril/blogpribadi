<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'uriel',
            'username' => 'urielkun',
            'email' => 'haikal.nuril25@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'nurul',
        //     'email' => 'haikal.nurul25@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        \App\Models\User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web Programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'Design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title'=> 'My Hololive Minato Aqua Portofolio',
        //     'category_id'=> 2,
        //     'user_id'=> 1,
        //     'slug'=>'my-hololive-minato-aqua-portofolio',
        //     'excerpt'=>'Minato Aqua is a female Japanese Virtual Youtuber associated with hololive',
        //     'body'=>'Minato Aqua is a female Japanese Virtual Youtuber associated with hololive, debuting as part of its second generation of Vtubers alongside Murasaki Shion, Nakiri Ayame, Yuzuki Choco and Oozora Subaru.'
        // ]);

        // Post::create([
        //     'title'=> 'My Hololive Oozora Subaru Portofolio',
        //     'category_id'=> 2,
        //     'user_id'=> 2,
        //     'slug'=>'my-hololive-oozora-subaru-portofolio',
        //     'excerpt'=>'Oozora Subaru is a female Japanese Virtual Youtuber associated with hololive',
        //     'body'=>'Oozora Subaru is a female Japanese Virtual Youtuber associated with hololive, debuting as part of its second generation of Vtubers alongside Murasaki Shion, Nakiri Ayame, Yuzuki Choco and Minato Aqua.'
        // ]);

        // Post::create([
        //     'title'=> 'Web Porto',
        //     'category_id'=> 1,
        //     'user_id'=> 1,
        //     'slug'=>'web-porto',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ad corporis odit eos fugit reprehenderit laborum cum inventore libero deleniti!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ad corporis odit eos fugit reprehenderit laborum cum inventore libero deleniti! Omnis pariatur dicta adipisci, aperiam nemo itaque? Saepe iusto, consectetur asperiores numquam tenetur recusandae voluptates voluptatum natus nostrum ratione explicabo veniam amet est unde praesentium reprehenderit, beatae necessitatibus enim possimus similique aliquam adipisci non. Nobis, ut praesentium. Dolore sequi blanditiis, iure exercitationem ex minima, quaerat ipsum quisquam consequatur sed dolor aspernatur tenetur facilis repudiandae soluta!</p><p>Qui optio architecto accusantium voluptatibus excepturi, odio ab cupiditate similique laboriosam consectetur rerum expedita facilis magni iure illum nulla quos explicabo officia rem? Perferendis aperiam eos expedita labore et quae voluptates porro iusto nisi autem eligendi explicabo dicta fugiat enim, accusamus sequi minus, quidem sit voluptas esse eveniet magnam fuga quod? Odit, distinctio? Hic sit, voluptates soluta neque itaque cumque quidem rerum adipisci deleniti, omnis a alias, repellendus beatae architecto aspernatur dolore? Culpa, sequi architecto?</p>'
        // ]);
    }
}
