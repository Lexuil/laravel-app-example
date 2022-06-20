<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;
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
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'first-post',
            'title' => 'First Post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus, risus sit amet varius iaculis, velit purus ullamcorper nibh, ac viverra leo nisl eu magna. Sed hendrerit tincidunt fringilla. Pellentesque quam ex, rhoncus vitae pharetra ut, efficitur eu felis. In mattis massa vel volutpat viverra. Vivamus semper lacus in suscipit efficitur. Pellentesque aliquam ex a velit gravida placerat. Maecenas urna quam, ornare in enim lobortis, efficitur venenatis magna. Fusce sagittis dolor vitae luctus dapibus.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus, risus sit amet varius iaculis, velit purus ullamcorper nibh, ac viverra leo nisl eu magna. Sed hendrerit tincidunt fringilla. Pellentesque quam ex, rhoncus vitae pharetra ut, efficitur eu felis. In mattis massa vel volutpat viverra. Vivamus semper lacus in suscipit efficitur. Pellentesque aliquam ex a velit gravida placerat. Maecenas urna quam, ornare in enim lobortis, efficitur venenatis magna. Fusce sagittis dolor vitae luctus dapibus.</p><p>Vestibulum eu sem non risus congue tempor. Aliquam facilisis accumsan ipsum, vel suscipit eros commodo eget. Pellentesque at neque vel nibh pharetra egestas. Proin vestibulum interdum velit nec auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Proin pretium scelerisque risus, at consequat arcu mattis non. Morbi blandit, mauris ac tristique ornare, arcu orci facilisis ipsum, nec auctor lorem mi eget turpis. Aenean porta, eros eu pretium placerat, libero eros hendrerit dui, nec scelerisque velit elit id massa. Nullam consequat nunc eu posuere vehicula. Phasellus varius ligula diam, eget malesuada diam eleifend ac. Nam molestie felis ac nulla pellentesque bibendum.</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'second-post',
            'title' => 'Second Post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus, risus sit amet varius iaculis, velit purus ullamcorper nibh, ac viverra leo nisl eu magna. Sed hendrerit tincidunt fringilla. Pellentesque quam ex, rhoncus vitae pharetra ut, efficitur eu felis. In mattis massa vel volutpat viverra. Vivamus semper lacus in suscipit efficitur. Pellentesque aliquam ex a velit gravida placerat. Maecenas urna quam, ornare in enim lobortis, efficitur venenatis magna. Fusce sagittis dolor vitae luctus dapibus.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus, risus sit amet varius iaculis, velit purus ullamcorper nibh, ac viverra leo nisl eu magna. Sed hendrerit tincidunt fringilla. Pellentesque quam ex, rhoncus vitae pharetra ut, efficitur eu felis. In mattis massa vel volutpat viverra. Vivamus semper lacus in suscipit efficitur. Pellentesque aliquam ex a velit gravida placerat. Maecenas urna quam, ornare in enim lobortis, efficitur venenatis magna. Fusce sagittis dolor vitae luctus dapibus.</p><p>Vestibulum eu sem non risus congue tempor. Aliquam facilisis accumsan ipsum, vel suscipit eros commodo eget. Pellentesque at neque vel nibh ph</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'slug' => 'third-post',
            'title' => 'Third Post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porttitor, urna in elementum ultrices, massa ex ullamcorper massa, aliquet consectetur nisl magna sed mi. Cras consectetur vulputate sapien sit amet placerat. Fusce finibus feugiat diam, non dignissim elit dignissim non. Mauris suscipit dui tortor, eu lacinia nisl tincidunt sed. Mauris molestie ante ac purus sodales ullamcorper. Vivamus venenatis blandit sem cursus bibendum. Donec non bibendum eros.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porttitor, urna in elementum ultrices, massa ex ullamcorper massa, aliquet consectetur nisl magna sed mi. Cras consectetur vulputate sapien sit amet placerat. Fusce finibus feugiat diam, non dignissim elit dignissim non. Mauris suscipit dui tortor, eu lacinia nisl tincidunt sed. Mauris molestie ante ac purus sodales ullamcorper. Vivamus venenatis blandit sem cursus bibendum. Donec non bibendum eros.</p><p>Mauris volutpat, turpis ut iaculis scelerisque, enim ex rutrum metus, id feugiat enim metus sed urna. Vestibulum ipsum diam, convallis a eros ac, feugiat finibus mi. Curabitur pellentesque vitae magna ac vulputate. Fusce orci velit, porta et convallis quis, semper nec nisi. Nullam faucibus vel nulla a vestibulum. Vestibulum consectetur enim augue, quis suscipit leo mattis vel. Aliquam eget felis eu est pharetra tempor sollicitudin ac lorem. Aliquam sit amet sem pellentesque, volutpat diam accumsan, vestibulum justo. Maecenas eleifend sed diam quis scelerisque.</p>',
        ]);
    }
}
