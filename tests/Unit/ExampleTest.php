<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{   
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //given I have 2 records in the database
        // and each one is posted a month apart
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);
      
        //when I fetch the archives
        $posts = Post::archives();
// dd($posts);
        //then the response should be in the proper format
        $this->assertEquals([
            [
                "year" => $first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
                "published" => 1

            ],
            
            [
                "year" => $second->created_at->format('Y'),
                "month" => $second->created_at->format('F'),
                "published" => 1

            ]
            ], $posts);

    }
}
