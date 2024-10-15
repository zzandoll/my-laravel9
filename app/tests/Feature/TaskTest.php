<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Task;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $task = Task::factory()->count(10)->create();

        $response = $this->get('/');

        $response
        ->assertOk();

        $response
        ->assertStatus(200);
    }
}
