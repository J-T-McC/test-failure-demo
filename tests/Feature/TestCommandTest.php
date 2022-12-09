<?php

namespace Tests\Feature;

use App\Jobs\TestJob;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class TestCommandTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_passing()
    {
        Queue::fake();

        $this->artisan('command:name');

        Queue::assertPushed(TestJob::class, 1);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_failing()
    {
        Queue::fake();

        $result = $this->artisan('command:name');

        Queue::assertPushed(TestJob::class, 1);
    }
}
